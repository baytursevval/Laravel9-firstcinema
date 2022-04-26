@extends('layouts.admin')

@section('title', 'Setting Edit Page')

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
                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >contact</label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label >references</label>
                                    <textarea id="references" name="references">{{$data->references}}</textarea>
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
