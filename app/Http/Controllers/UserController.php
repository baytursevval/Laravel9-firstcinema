<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_user=DB::table('users')->where('id',Auth::user()->id)->   get()->first();

        return view('home.user_profile',['data_user'=>$data_user]);
    }

    public function like($user_id)
    {

        if (isset(Auth::user()->id))
            $user_id=Auth::user()->id;
        else
            $user_id=0;


        $like_film="True";
        $data_film= Film::where('user_id',Auth::user()->id)->get()->first();

        $data_user=User::where('id',Auth::user()->id)->get()->first();
        //$datalist_films =Film::where('id',Auth::user()->id)->get()->all();
        $datalist_like=Like::where('user_id', $user_id)->get();
        //foreach ($datalist_like as $rs)
         //  echo $rs->user_id;


        //$datalist_like=Like::find($user_id)->get();
       // $datalist_like[1]=$datalist_like[0];
        //print_r($datalist_like);
        //exit();
        return view('home.user_film_like',['data_user'=>$data_user,
            'datalist_like'=>$datalist_like,
            'data_film'=>$data_film]);
    }

    public function unlike($film_id, Like $like)
    {
        //echo $film_id; exit();
        $user_id = Auth::user()->id;

        $data=Like::where('user_id',$user_id)->where('film_id',$film_id)->get();
        //$data=Film::where('user_id',$user_id)->where('id',20)->get()->first();
        //$data=Film::find(42);
        //print_r($data);
        //echo $data->id;
        //exit();

        $data[1]=$data[0];
        $data[1]->like="False";
        $data[1]->save();


        return redirect()->route('user_film_like', ['user_id' => $user_id]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $userid=Auth::user()->id;
        $data=User::find($userid);

        $data->name = $request->input('name');
        $data->email = $request->input('email');

        if ($request->file('image')!=null) {
            $data->image = Storage::putFile('profile_images', $request->file('image'));
        }

        $data->save();
        return redirect()->route('myprofile');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
