@extends('layouts.admin')

@section('title', 'Film Edit Page')

@section('content')
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

                                @foreach($data_category as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif </option>
                                @endforeach
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" name="title" value="">
                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="">
                                </div>

                                <div class="form-group">
                                    <label >Desc</label>
                                    <input type="text" class="form-control" name="description" value="">
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" name="image" value="image">
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
                                    <input type="text" class="form-control" name="videolink" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>








                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary mr-2">Add</button>

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
