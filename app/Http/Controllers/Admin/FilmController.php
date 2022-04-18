<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{

    public function filmdetay($filmid){

        return view('home.filmdetay',['filmid'=>$filmid]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::table('film')->get();
        return view('admin.film', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.film_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data= new Film;


DB::table('film')->insert([
            'user_id'=> "1",


        'title' => $request->input('title'),
        'keywords' => $request->input('keywords'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
        'category_id' => $request->input('category_id'),
        'detail' => $request->input('detail'),
        'videolink' => $request->input('videolink'),
        'status' => $request->input('status')

 ])  ;

        /*
        $data->user_id=1;
        $data->id = $request->input('id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->videolink = $request->input('videolink');
        $data->status = $request->input('status');
        $data->save();
        */

        return redirect()->route('admin_film');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}
