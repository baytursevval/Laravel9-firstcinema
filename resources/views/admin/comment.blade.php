@extends('layouts.admin')


@section('title', ' Comments ')

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
                    <h3 class="card-title">Yorumlar</h3>

                </div>
                <div class="card-body">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                  <br>
                                  @include('home.message')
                                    <table class="table table-bordered" >
                                        <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> İsim </th>
                                            <th> Film </th>
                                            <th> Yorum </th>
                                            <th> Status </th>
                                            <th> Düzenle </th>
                                            <th> Sil </th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist_comment as $rs)
                                        <tr>
                                            <td> {{$rs->id}} </td>
                                            <td>
                                                <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                                    {{$rs->user->name}}
                                                </a>
                                            </td>
                                            <td> {{$rs->film_id}} </td>
                                            <td> {{$rs->comment}} </td>

                                            <td> {{$rs->status}} </td>


                                            <td> <a href="{{route('admin_comment_edit', ['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800,height=600')">
                                                    <i class="mdi mdi-tooltip-edit"></i> </a></td>
                                            <td><a href="{{route('admin_comment_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" > <div class="col-sm-6 col-md-4 col-lg-3">
                                                        <i class="mdi mdi-delete"></i>
                                                    </div> </a></td>

                                        </tr>

                                        @endforeach

                                        </tbody>
                                    </table>

                            </div>
                        </div>
                    </div>









                </div>

            </div>
        </section>
    </div>
@endsection
