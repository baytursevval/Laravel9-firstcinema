<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Models\Like;
use App\Models\Point;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;


class HomeController extends Controller
{
    //
    public function home(){

        $setting= Setting::first();

         $datalist_category=DB::table('categories')->get();
         $datalist_slider=DB::table('Films')-> where('image_slider','>','')->orderBy('image_slider','desc')->limit(3)->get();
     //   foreach ($datalist_slider as $rs)             echo $rs->title. "<br>";

        $datalist_son = DB::table('Films')->limit(8)->orderBy('id','desc')->get();
        $datalist_populer = DB::table('Films')->limit(4)->get();
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
        return view('home.about');
    }

    public function login(){
        return view('admin.login');
    }

    public function blog(){
        return view('admin.about');
    }

    public function contact(){
        return view('admin.about');
    }



    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('home');

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
        $can_point="False";
        $can_like="False";

        if (isset(Auth::user()->id))
        $user_id=Auth::user()->id;
        else
        $user_id=0;

        $datalist_point= Point::where('user_id', $user_id)->where('film_id',$film_id)->get()->first() ;
        if ($datalist_point===null)
             $can_point="True";

        $datalist_like=Like::where('user_id', $user_id)->where('film_id',$film_id)->get()->first();
        if ($datalist_like===null)
                 $can_like="True";
           else if($datalist_like->like=="False")
                    $can_like="True";

        $datalist_comment=DB::table('comments')->get();
        $data_film= DB:: table('films')->where('id', $film_id)->get()->first();

        $data_user=DB::table('users')->where('id',$data_film->user_id)->get()->first();

        //  echo $data_film->title; exit();

        $data_category=DB::table('categories')->get();

        //$rs=$datalist[0];
        $film_id=['film_id'=>$film_id];


        return view('home.filmdetay',['film_id'=>$film_id,
            'data_film'=>$data_film,
            'data_category'=>$data_category,
            'datalist_comment'=>$datalist_comment,
            'can_point'=>$can_point,
            'can_like'=>$can_like,
            'data_user'=>$data_user]);
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
        $data=['ad'=>'ali', 'soyad'=>'veli' ];
        $data2=['name'=>'jack', 'lname'=>'vel' ];
        return view('home.test');
    }

public function filmkategori($categori_id){

    $datalist = DB::table('Films')->where('category_id', $categori_id)->limit('8')->get();
        return view('home.filmkategori', ['datalist'=>$datalist]);
}



}
