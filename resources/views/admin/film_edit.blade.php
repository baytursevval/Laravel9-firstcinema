@extends('layouts.admin')

@section('title', 'Film Edit Page')

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
                    <h3 class="card-title">Edit Category</h3>

                </div>
                <div class="card-body">

                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('admin_film_update',['filmid'=>$filmid])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf

                                <label for="exampleSelectGender">Category </label>
                                <select class="form-control" name="category_id" >
                                    @foreach($data_category as $rs)
                                        <option @if   ($rs->id == $data->category_id) selected="selected"
                                                @endif
                                                value="{{$rs->id}}"> {{$rs->title}} </option>
                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" >
                                </div>

                                <div class="form-group">
                                    <label >Desc</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>

                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" class="form-control" name="image" >

                        </div>

                                <div class="form-group">
                                    <label >Image Slider</label>
                                    <input type="file" class="form-control" name="image_slider" >
                                </div>

                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="detail">{{$data->detail}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >videolink</label>
                                    <input type="file" class="form-control" name="videolink" value="{{$data->videolink}}">
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
