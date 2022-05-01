@extends('layouts.home')

@section('title', 'Edit Page')

@section('content')

    <style>

        h1,h3{
            color: whitesmoke;
        }
    </style>
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3" style="background-color: darkseagreen " >
                        <h3 class="">User panel</h3>
                        <ul class=""> </ul>
                        <li> <a href="{{route('myprofile')}}"> My profile</a> </li>
                        <li> <a href=""> My favs</a> </li>
                        <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                        <li> <a href=""> log out</a> </li>
                    </div>
                    <div class="col-lg-9">
                        <form action="{{route('update_comment',['id'=>$id])}}" method="post" class="forms-sample">
                    @csrf

                            <div class="form-group">
                                <label >comment</label>
                                <input type="text" class="form-control" name="comment" value="{{$data->comment}}" >
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>

                        </form>
@endsection
