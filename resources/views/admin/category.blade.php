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
                        <h4 class="card-title">Listem </h4>
                        @auth
                            yetkili
                        @endauth
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Adı</th>
                                    <th>Oluşturma Tarihi</th>
                                    <th>Durum</th>
                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->parent_id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

