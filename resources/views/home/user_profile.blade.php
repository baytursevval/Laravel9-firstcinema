@extends('layouts.home')

@section('title', 'user profile')

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
                            <div class="col-lg-3" style="bg-clear:both; color: red" >
                            <h3 class="class-deneme" autofocus > User panel</h3>
                                <ul class="" style="color:"> </ul>
                                <li> <a href="{{route('myprofile')}}"> My profile</a> </li>
                                <li> <a href=""> My favs</a> </li>
                                <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                                <li> <a href="{{route('admin_logout')}}"> log out</a> </li>
                            </div>
                            <div class="col-lg-9">

                                <form action="{{route('myprofile_update')}}"  method="post" enctype="multipart/form-data">
                                    @csrf

                                    <table border="2" bgcolor="#f5f5f5">
                                        <tr>
                                        <th width="200px">  <label for="">User Image</label></th>
                                            <td> @if ($data_user->image)
                                                    <img src="{{asset('')}}storage/{{$data_user->image}}" style="width:100px; height:100px">
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <th>  <label >Select a New Photo </label></th>
                                            <td><input type="file" class="form-control" name="image" ></td>
                                        </tr>
                                        <tr>
                                            <th> <label for="">User Name</label></th>
                                         <td><input type="text" name="name" id="name1" value="{{$data_user->name}}" placeholder="Name"></td>

                                        </tr>
                                            <tr>
                                                <th>  <label for="">E-mail   </label></th>
                                        <td>
                                            <input type="text" name="email" value="{{$data_user->email}}"placeholder="Email"></td>
                                        </tr>

                                    <div class="form-group">


                                    </div>


                                    </table>
                                    <br>
                                    <button type="submit" class="site-btn">UPDATE</button>
                                </form>
                            </div>
            </div>
        </section>
        <section class="content-body">

        </section>
    </div>
@endsection
