<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= Faq::all();

        return view('admin.faq', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Faq;
        $data->question=$request->input('question');
        $data->answer=$request->input('answer');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_faq')->with('success', 'faq eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq, $faqid)
    {
        //

        $data=Faq::find($faqid);
        //echo $data->id;
        //exit();
        return view('admin.faq_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq, $faqid)
    {
        //

        $data = Faq::find($faqid);
        $data->question=$request->input('question');
        $data->answer=$request->input('answer');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_faq')->with('success', 'faq updated succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq, $faqid)
    {
        //
        $data=Faq::find($faqid);
        $data->delete();

        return redirect()->route('admin_faq')->with('success', 'faq deleted succesfuly');
    }
}
