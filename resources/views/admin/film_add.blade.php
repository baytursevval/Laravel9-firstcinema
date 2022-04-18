@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

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
                    <h3 class="card-title">Title</h3>

                </div>
                <div class="card-body">





                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>

                            <form action="{{route('admin_film_store') }}" method="post" class="forms-sample">
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
                                    <input type="text" class="form-control" name="image" >
                                </div>

                                <div class="form-group">
                                    <label >Categoryid</label>
                                    <input type="text" class="form-control" name="category_id" >
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
                                    <label >Status</label>
                                    <input type="text" class="form-control" name="status" >
                                </div>






                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option>Male</option>
                                        <option>Female</option>
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
