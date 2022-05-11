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
                            <div class="col-lg-3" style="background-color: #9fcdff " >
                            <h3 class="">User panel</h3>
                                <ul class=""> </ul>
                                <li> <a href="{{route('myprofile')}}"> My profile</a> </li>
                                <li> <a href=""> My favs</a> </li>
                                <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                                <li> <a href=""> log out</a> </li>
                            </div>
                            <div class="col-lg-9">
                                <table class="table table-bordered" style="background-color: #4a8aff" >
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Film </th>
                                        <th> Comment </th>
                                        <th> Edit </th>
                                        <th> Delete </th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($datalist_comments as $rs)
                                        <tr>
                                            <td> {{$rs->id}} </td>
                                            <td> {{$rs->film_id}} </td>
                                            <td> {{$rs->comment}} </td>
                                            <td> <a href="{{route('edit_comment',['id'=>$rs->id])}}">EDIT </a></td>
                                            <td><a href="{{route('del_comment',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" >Delete
                                                   </a></td>

                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>




            </div>
        </section>
        <section class="content-body">

        </section>



    </div>
@endsection