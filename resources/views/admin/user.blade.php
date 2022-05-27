@extends('layouts.admin')


@section('title', ' Users ')

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
                    <h3 class="card-title">Kullanıcılar Tablosu</h3>
                    @include('home.message')
                </div>
                <div class="card-body">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Image </th>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Roles </th>
                                            <th> Edit </th>
                                            <th> Delete </th>


                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td> {{$rs->id}} </td>
                                            <td> @if ($rs->image)
                                                    <img src="{{asset('')}}storage/{{$rs->image}}" style="width: 50px; height:50px">
                                                @endif
                                            </td>
                                            <td> {{$rs->name}} </td>
                                            <td> {{$rs->email}} </td>
                                            <td>@foreach($rs->roles as $row)
                                            {{$row->name}},
                                                @endforeach
                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800,height=600')">
                                                <i class="mdi mdi-bookmark-plus"></i>
                                            </a>
                                            </td>
                                            <td> <a href="{{route('admin_user_edit', ['id'=>$rs->id])}}"> <i class="mdi mdi-tooltip-edit"></i> </a></td>
                                            <td><a href="{{route('admin_user_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" > <div class="col-sm-6 col-md-4 col-lg-3">
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

            </div>
        </section>
    </div>
@endsection
