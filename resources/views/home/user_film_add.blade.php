@extends('layouts.home')

@section('title', 'add film')


@section('headerjs')

    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

@endsection

@section('content')

    <style>

        h1,h3{
            color: whitesmoke;
        }
        label{
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
                                <li> <a href="{{route('mycomments')}}"> My comments</a> </li>
                                <li> <a href="{{route('user_film')}}"> My films</a> </li>
                                <li> <a href="{{route('admin_logout')}}"> log out</a> </li>
                            </div>
                            <div class="col-lg-9">
                                <form action="{{route('user_film_store') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                                   <br>
                                    @csrf
                                    <div class="form-group" style="width: 600px">
                                        <label style="color: whitesmoke">Title</label>
                                        <input type="text" class="form-control" name="title" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" name="keywords" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >Desc</label>
                                        <input type="text" class="form-control" name="description" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >Image</label>
                                        <input type="file" class="form-control" name="image" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >ImageSlider</label>
                                        <input type="file" class="form-control" name="image_slider" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label for="exampleSelectGender">Category </label>
                                        <select class="form-control" name="category_id">
                                            @foreach($data_category as $rs)
                                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >Detail</label> <br>
                                        <textarea id="detail" name="detail"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label >videolink</label>
                                        <input type="file" class="form-control" name="videolink" >
                                    </div>

                                    <div class="form-group" style="width: 600px">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
                                </form>

                            </div>




            </div>
        </section>
        <section class="content-body">

        </section>



    </div>
@endsection
