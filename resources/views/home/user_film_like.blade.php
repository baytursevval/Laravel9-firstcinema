@extends('layouts.home')

@section('title', 'user profile')



@section('content')

    <style>

        h1,h3{
            color: whitesmoke;
        }
        td{
            color: whitesmoke;
        }

    </style>

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3" style="" >
                            <h3 class="">User panel</h3>
                                <ul class="aside-title" style=""> </ul>
                                <li> <a href="{{route('myprofile')}}"> My profile</a> </li>
                                <li> <a href="{{route('user_film_like',['user_id'=>Auth::user()->id])}}">My favs</a></li>
                                <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                                <li> <a href="{{route('user_film')}}"> My films</a> </li>
                                <li> <a href="{{route('admin_logout')}}"> log out</a> </li>
                            </div>
                            <div class="col-lg-9">
                                <div class="card-body">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body" style="background-color: #0b0c2a">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead style="color: whitesmoke">
                                                        <tr>
                                                            <th> Film ID </th>
                                                            <th> Resim </th>
                                                            <th> Film Adı </th>
                                                            <th> Unlike </th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($datalist_like as $rs)
                                                            @if($rs->like=="True")
                                                        <tr>
                                                            <td>{{$rs->film->id}}</td>
                                                            <td> @if ($rs->film->image)
                                                                    <img src="{{asset('')}}storage/{{$rs->film->image}}" style="width: 50px; height:50px">
                                                                @endif
                                                            </td>
                                                            <td>{{$rs->film->title}}</td>

                                                            <td><a href="{{route('user_film_unlike',['film_id'=>$rs->film_id])}}">
                                                                    <i class="fa fa-close"></i></a></td>
                                                        </tr>
                                                            @endif
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </section>

    </div>
@endsection
