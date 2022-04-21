<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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
        $datalist = DB::table('films')->get();
        return view('admin.film', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_category= DB::table('categories')->get();
        return view ('admin.film_add', ['data_category'=>$data_category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $data=new Film();

        $data->category_id=$request->input('category_id');
        //$data->update(15);

        //$data= new Film;

/*
        DB::table('films')->update([
            'user_id'=> "1",
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('images', $request->file('image')),
            'category_id' => $request->input('category_id'),
            'detail' => $request->input('detail'),
            'videolink' => $request->input('videolink'),
            'status' => $request->input('status')
        ])  ;
*/
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
    public function edit(Film $film,$filmid)
    {
      //
        $data = DB::table('films')->find($filmid);
        $data_category= Category::all();

     //   $datalist = DB::table('films')->get()->where('parent_id', 0);

        return view('admin.film_edit', ['data'=>$data, 'data_category'=>$data_category, 'filmid'=>$filmid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film, $filmid)
    {
        echo "eerrr";

        DB::table('films')->where('id',$filmid )-> update( [
            'user_id'=> "1",
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('images', $request->file('image')),
            'category_id' => $request->input('category_id'),
            'detail' => $request->input('detail'),
            'videolink' => $request->input('videolink'),
            'status' => $request->input('status')
        ])  ;
    /*
        $data= Film::find($filmid);
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film,$id)
    {
        DB::table('films')->where('id', '=', $id)->delete();
        return redirect()->route('admin_film');
    }
}
