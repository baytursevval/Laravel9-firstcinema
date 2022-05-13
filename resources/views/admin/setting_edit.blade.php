@extends('layouts.admin')

@section('title', 'Setting Edit Page')

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
                        <div class="card-body">

                            <form action="{{route('admin_setting_update')}}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

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
                                    <label >company</label>
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                </div>
                                <div class="form-group">
                                    <label >adress</label>
                                    <input type="text" class="form-control" name="adress" value="{{$data->adress}}">
                                </div>
                                <div class="form-group">
                                    <label >phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                                <div class="form-group">
                                    <label >fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                                <div class="form-group">
                                    <label >email</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label >smtpserver</label>
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                                <div class="form-group">
                                    <label >smtpemail</label>
                                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                </div>
                                <div class="form-group">
                                    <label >smtppassword</label>
                                    <input type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                                <div class="form-group">
                                    <label >smtpport</label>
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                                <div class="form-group">
                                    <label >facebook</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                                <div class="form-group">
                                    <label >instagram</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="form-group">
                                    <label >twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="form-group">
                                    <label >youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>


                                <div class="form-group">
                                    <label >aboutus</label>
                                    <textarea id="summernote" name="aboutus"> {{$data->aboutus}}</textarea>

                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label >contact</label>
                                    <textarea id="summernote2" name="contact">{{$data->contact}}</textarea>

                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote2').summernote();
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >references</label>
                                    <textarea id="summernote3" name="references">{{$data->references}}</textarea>

                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote3').summernote();
                                        });
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

                </div>
            </div>
        </section>
    </div>
@endsection
