<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Film;
use App\Models\Like;
use App\Models\Message;
use App\Models\Point;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;


class HomeController extends Controller
{
    //
    public function home(){

        $setting= Setting::first();
        //$puan=Film::orderBy('point','desc')->limit(8)->get();

         $datalist_category=Category::get();
         $datalist_slider=Film::where('image_slider','!=',null)->where('image_slider','>','')->orderBy('image_slider','desc')->limit(3)->get();
     //   foreach ($datalist_slider as $rs)             echo $rs->title. "<br>";

        $datalist_son =Film::limit(8)->orderBy('id','desc')->get();
        $datalist_populer =Film::orderBy('point','desc')->limit(8)->get();
        return view('home.index',['datalist_slider'=>$datalist_slider,
            'datalist_son'=>$datalist_son,
            'datalist_populer'=>$datalist_populer,
            'datalist_category'=>$datalist_category,
            'setting'=>$setting
        ]);

    }


    public function filmsearch(Request $request){

       $search= $request->input('search');

       $datalist_search=Film::where('title', 'like', '%'.$search.'%')->get();

       return view('home.filmsearch',['datalist_search'=>$datalist_search]);

    }
    public function searchresult(){



    }

    public function home1(){

        $datalist = DB::table('Films')->get();
       // print_r($datalist);
        //exit();
        return view('home.home1', ['datalist'=>$datalist]);

      //  return view('home.home1');
    }

    public function aboutus(){
        $setting= Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references(){
        $setting= Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function contact(){
        $setting= Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){

        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Mesajınız Alındı, Teşekkür Ederiz.');
    }

    /*
     public static function getsetting(){
        return Setting::first();
    }
    */

    public function faq(){
        $datalist=Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function login(){
        return view('admin.login');
    }
    public function signup(){


        return view('admin.signup');
    }

    public function signupcheck(Request $request){

        //echo "aa";
        //exit();

        //$setting= Setting::first();
        $count=User::where('email',$request->input('email'))->count();
        //$count=$data_user->count();
        //count($data_user);
        echo $count;
        if($count==1)
        return redirect()->route('signup')->with('error','Bu Mail adresi kullanılıyor');
        else{
            $data=new User;
            $data->name=$request->input('name');
            $data->email=$request->input('email');
                $data->password=bcrypt($request->input('password'));
            $data->save();

            if($request->isMethod('post'))
            {
                $credentials = $request->only('email','password');
                if(Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    //echo "user=" . Auth::user()->id;
                    return redirect()->route('home');
                    //return redirect()->intended('defaultpage');
                }
               return back()->withErrors([
                    'email'=>'The provided credentails do not match our records.',
                ]);
            }
            
            //return redirect()->route('admin_login');
            return view('admin.login');

        }


    }



    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('home');
                    //return redirect()->intended('defaultpage');
            }
            return back()->withErrors([
                'email'=>'The provided credentails do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
            //return redirect()->back();
        }


    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function filmdetay($film_id){

        $data_film= Film::where('id', $film_id)->get()->first();

        $data_category=Category::get();
        //$rs=$datalist[0];
        $yorum_sayısı=DB::table('comments')->where('film_id', $film_id)->count();
        $datalist_comment=Comment::where('film_id', $film_id)->get();

        // $data_user=DB::table('users')->where('id',$data_film->user_id)->get()->first();
        //echo $data_film->category->title;
        //exit();
        // echo $data_film->title; exit();

        if (isset(Auth::user()->id))
            $user_id=Auth::user()->id;
        else
            $user_id=0;

        $can_point="False";

        $datalist_point= Point::where('user_id', $user_id)->where('film_id',$film_id)->get()->first() ;
        if ($datalist_point===null)
            $can_point="True";

        $can_like="False";

        $datalist_like=Like::where('user_id', $user_id)->where('film_id',$film_id)->get()->first();
        if ($datalist_like===null)
            $can_like="True";
        else if($datalist_like->like=="False")
            $can_like="True";

        $film_id=['film_id'=>$film_id];

        return view('home.filmdetay',['film_id'=>$film_id,
            'data_film'=>$data_film,
            'data_category'=>$data_category,
            'datalist_comment'=>$datalist_comment,
            'can_point'=>$can_point,
            'can_like'=>$can_like,
            'datalist_point'=>$datalist_point,
            'yorum_sayısı'=>$yorum_sayısı]);
    }


    public function likefilm($film_id){
            $user_id=Auth::user()->id;
            $data_like= Like::where('user_id',$user_id)->where('film_id',$film_id)->get()->first();
            if($data_like===null) {
              // kayıt yoksa
                $new_like= new Like;
                $new_like->user_id=$user_id;
                $new_like->film_id=$film_id;
                $new_like->like="True";
                $new_like->save();
            }
            else
                if ($data_like->like=="False")
                {
                    $data_like->like="True";
                    $data_like->save();
                }
        return redirect()->route('filmdetay',['film_id'=>$film_id]);

    }
    public function unlikefilm($film_id)
    {
        $user_id = Auth::user()->id;

       $data=Like::where('user_id',$user_id)->where('film_id',$film_id)->get()->first();
       $data->like="False";
       $data->save();

       return redirect()->route('filmdetay', ['film_id' => $film_id]);

    }

    public function test(){

        //$ad='ali';
       // $data=['ad'=>'ali', 'soyad'=>'veli' ];
        //$data2=['name'=>'jack', 'lname'=>'vel' ];

       // return view('home.test');
        echo bcrypt('123456789');
        if (bcrypt('123456789')=='$2y$10$oJ6nSwuFRj2qjxlXnvLcve4E7T6Uwss.j7P9CvGX/jQgrVSAMrwwS')
            echo "True";
        return view('home.test');
    }

public function filmkategori($categori_id){
        $data_category=Category::get()->first();
        $datalist = Film::where('category_id', $categori_id)->get();

        return view('home.filmkategori', ['datalist'=>$datalist,'data_category'=>$data_category]);
}

    public function tumfilmler(){

        $datalist = DB::table('Films')->orderBy('id','desc')->get();
        return view('home.tumfilmler', ['datalist'=>$datalist]);
    }

    public function populerfilmler(){

        //$datalist=Film::orderBy('point')->get();

       // $yorum_sayısı=DB::table('comments')->where('film_id', $film_id)->count();
        $datalist = DB::table('Films')->orderBy('point','desc')->get();
        return view('home.populerfilmler', ['datalist'=>$datalist]);
    }

}
