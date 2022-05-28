@extends('layouts.admin')

@section('title', 'Comment Edit Page')

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
                            <form action="{{route('admin_comment_update',['id'=>$data->id])}}" method="post" class="forms-sample">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th> ID </th><td> {{$data->id}} </td>
                                    </tr>

                                    <tr>
                                        <th> İsim </th><td>
                                         {{$data->user->name}} </td>
                                    </tr>

                                    <tr>
                                        <th> Email </th><td> {{$data->user->email}} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th><td> {{$data->comment}} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th><td> {{$data->created_at}} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th><td> {{$data->updated_at}} </td>
                                    </tr>
                                    <tr>
                                        <th> Status </th>
                                        <td>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </td>
                                    </tr>

                                </table>
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
