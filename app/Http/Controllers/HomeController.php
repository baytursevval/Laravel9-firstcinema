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
        $datalist =DB::select ($sql);
        //$rs=$datalist[0];
        $filmidno=['filmid'=>$filmid];

        return view('home.filmdetay',$filmidno,$datalist);
    }



    public function test(){
        //$ad='ali';
        $data=['ad'=>'ali', 'soyad'=>'veli' ];
        $data2=['name'=>'jack', 'lname'=>'vel' ];
        return view('home.test',$data,$data2);
    }

public function filmkategori($categori_id){
        echo "$categori_id";
}

}
