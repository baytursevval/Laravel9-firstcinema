@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">

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
                    <h3 class="card-title">Film Ekle</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin_film_store') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" name="title" >
                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" name="keywords" >
                                </div>

                                <div class="form-group">
                                    <label >Desc</label>
                                    <input type="text" class="form-control" name="description" >
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>

                                <div class="form-group">
                                    <label >ImageSlider</label>
                                    <input type="file" class="form-control" name="image_slider" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Category </label>
                                    <select class="form-control" name="category_id">
                                     @foreach($data_category as $rs)
                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="detail"></textarea>
                                </div>
                                <div class="form-group">
                                    <label >videolink</label>
                                    <input type="file" class="form-control" name="videolink" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
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
