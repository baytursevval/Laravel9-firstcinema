@extends('layouts.admin')

@section('title', 'Faq Edit Page')

@section('javascript')
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    hello
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">
                    <div class="col-sm-6">
                        <h3>Blank Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">Blank Page </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit </h3>

                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin_faq_update',['faqid'=>$data->id])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" class="form-control" name="question" value="{{$data->question}}" >
                                </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                   <textarea name="answer">{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="{{$data->status}}">{{$data->status}}</option>

                                        <option value="True">True</option>
                                        <option value="False">False</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
@endsection
