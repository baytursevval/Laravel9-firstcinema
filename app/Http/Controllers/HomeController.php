<?php

namespace App\Http\Controllers;

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
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function filmdetay($filmid){
        $can_point="False";

        $user_id=Auth::user()->id;

        $datalist_point= Point::where('user_id', $user_id)->get()->first() ;
        if ($datalist_point===null)
            echo $can_point="True";

        $datalist_comment=DB::table('comments')->get();
        $data_film= DB:: table('films')->where('id', $filmid)->get()->first();

      //  echo $data_film->title; exit();

        $data_category=DB::table('categories')->get();

        //$rs=$datalist[0];
        $filmid=['filmid'=>$filmid];

        return view('home.filmdetay',['data_film'=>$data_film,
            'filmid'=>$filmid,
            'data_category'=>$data_category,
            'datalist_comment'=>$datalist_comment,
            'can_point'=>$can_point]);
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
