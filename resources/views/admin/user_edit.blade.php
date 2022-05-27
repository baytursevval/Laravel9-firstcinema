@extends('layouts.admin')

@section('title', 'User Edit Page')

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

                            <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" class="forms-sample" enctype="multipart/form-data">

                            @csrf

                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}" >
                                </div>

                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}" >
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @if ($data->image)
                                        <img src="{{asset('')}}storage/{{$data->image}}" style="width: 50px; height:50px">
                                    @endif
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
