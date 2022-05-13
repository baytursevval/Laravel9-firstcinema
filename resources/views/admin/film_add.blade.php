@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

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
                                    <label >Detail</label> <br>
                                    <textarea id="summernote" name="detail"></textarea>

                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
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
