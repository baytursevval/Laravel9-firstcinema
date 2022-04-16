@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

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
                <form role="form" action="{{route('admin_category_create')}}" method="post">
                @csrf
                    <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">Yeni Liste</h4>
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control form-control-sm" name="parent_id" >
                                <option value="0" selected="selected">Ana Category</option>

                                @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" name="keywords" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" aria-label="Username">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-control-sm" name="status">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Oluştur</button>
                </div>
                </form>
                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>
    </div>
@endsection
