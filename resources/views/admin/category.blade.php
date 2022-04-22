@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Basic Tables </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori </h4>
                       @auth
                        @endauth
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tür</th>
                                    <th>Durum</th>
                                    <th>Düzenleme</th>
                                    <th>Silme</th>
                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_category_edit', ['id'=>$rs->id])}}">Edit</a></td>
                                        <td><a href="{{route('admin_category_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                        </div>
                        <button style="color: white" type="submit" class="btn btn-success btn-fw"><a href="{{route('admin_category_add')}}">Yeni Kategori</a> </button>

                    </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

