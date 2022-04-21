<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home(){

        $datalist = DB::table('Film')->get();
        return view('home.index',['datalist'=>$datalist]);
    }

    public function home1(){

        $datalist = DB::table('Film')->get();
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
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
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
        $sql="select * from Film Where id=$filmid";
        $data1 =DB::select ($sql);
        $data=$data1[0];

        $data_category=DB::table('categories')->get();



        //$rs=$datalist[0];
        $filmid=['filmid'=>$filmid];

        return view('home.filmdetay',['data'=>$data,'filmid'=>$filmid,'data_category'=>$data_category]);
    }



    public function test(){
        //$ad='ali';
        $data=['ad'=>'ali', 'soyad'=>'veli' ];
        $data2=['name'=>'jack', 'lname'=>'vel' ];
        return view('test');
    }

public function filmkategori($categori_id){
        echo "$categori_id";
}

}
