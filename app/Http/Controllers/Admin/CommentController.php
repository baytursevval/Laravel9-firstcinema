<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datalist_comment = Comment::all();
        return view('admin.comment',['datalist_comment'=>$datalist_comment]);
    }
    public function adminedit(Comment $comment, $id)
    {
        $data=Comment::find($id);
      //  $data->status= 'True';
      //  $data->save();
        return view('admin.comment_edit',['data'=>$data]);
    }
    public function adminupdate(Request $request, Comment $comment, $id)
    {
       //echo   "aa"; exit();
        $data=Comment::find($id);
       // echo $data->status; echo "<br>";
        //echo $request->input('status'); echo "<br>";
       //exit();
        $data->status=$request->input('status');
        $data->save();
        return back()->with('success', 'Yorum Güncellendi');

    }
    public function admindestroy(Comment $comment, $id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect()->route('admin_comment')->with('success','Yorum Silindi.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $film_id)
    {
        //$user_id=

        //echo "film id= $film_id  <br>";
        //echo "id= $  <br>";

        $data=new Comment;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->input('comment');
        $data->film_id = $film_id;

        $data->save();
        return redirect()->route('filmdetay',['film_id'=>$film_id]);
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

    public function mycomments()
    {
        $user_id=Auth::user()->id;
        $datalist_comments=Comment::where('user_id', $user_id)->get();
        return view ('home.user_comments',['datalist_comments'=>$datalist_comments]);
        }

    public function delete($id)
    {
        DB::table('comments')->where('id', '=', $id)->delete();
        return redirect()->route('mycomments');
    }

    public function show(Comment $comment)
    {
        //

    }



    public function edit(Comment $comment, $id)
    {
        //
        $data = DB::table('comments')->find($id);

        return view('home.comment_edit', ['data'=>$data,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment, $id)
    {
        $data=Comment::find($id);
        $data->comment = $request->input('comment');

        $data->save();

        return redirect()->route('mycomments');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
