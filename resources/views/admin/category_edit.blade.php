@extends('layouts.admin')

@section('title', 'Admin Edit Page')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">
                    <div class="col-sm-6">
                        <h3>Add category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">add category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <form role="form" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                @csrf
                    <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">Category Edit</h4>
                        <div class="form-group">


                            <div class="form-group">
                                <label>parent id</label>
                                <input type="text" class="form-control" value="0" name="parent_id">
                            </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" name="keywords" aria-label="Username" value="{{$data->keywords}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" aria-label="Username" value="{{$data->description}}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-control-sm" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"> Oluştur </button>
                </div>
                </form>
                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>
    </div>
@endsection
