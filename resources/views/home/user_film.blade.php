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
                                <li> <a href="{{route('user_film_like',['user_id'=>Auth::user()->id])}}"> My favs</a> </li>
                                <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                                <li> <a href="{{route('user_film')}}"> My films</a> </li>
                                <li> <a href="{{route('admin_logout')}}"> log out</a> </li>
                            </div>
                            <div class="col-lg-9">

                                <div class="card-body">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body" style="background-color: #0b0c2a">
                                                <a href="{{route('user_film_add')}}">
                                                    <button type="button" class="btn btn-primary btn-rounded btn-fw">Film Ekle</button>
                                                </a><br><br>
                                                @include('home.message')
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead style="color: whitesmoke">
                                                        <tr>
                                                            <th> Resim </th>
                                                            <th> ID </th>
                                                            <th> Title </th>
                                                            <th> Kategori Id </th>
                                                            <th> Resim Gallery</th>
                                                            <th> Edit </th>
                                                            <th> Delete </th>
                                                            <th> Detail </th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                            <div>
                                                                <td> @if ($rs->image)
                                                                        <img src="{{asset('')}}storage/{{$rs->image}}" style="width: 50px; height:50px">
                                                                    @endif
                                                                </td>
                                                                <td> {{$rs->id}} </td>
                                                                <td> {{$rs->title}} </td>
                                                                <td> {{$rs->category_id}} </td>
                                                                <th> <a href="{{route('user_image_add', ['film_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                                                            <i class="fa fa-image"></i>
                                                                        </div></a>
                                                                </th>
                                                                <td> <a href="{{route('user_film_edit', ['filmid'=>$rs->id])}}"><i class="fa fa-edit"></i></a></td>
                                                                <td><a href="{{route('user_film_delete', ['filmid'=>$rs->id])}}"<i class="fa fa-trash"></i></td>

                                                                <td> {{$rs->detail}} </td>


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




            </div>
        </section>
        <section class="content-body">

        </section>



    </div>
@endsection
