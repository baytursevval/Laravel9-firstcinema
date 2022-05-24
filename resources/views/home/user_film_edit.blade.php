@extends('layouts.home')

@section('title', 'edit film')


@section('headerjs')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

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
                                <form action="{{route('user_film_update',['filmid'=>$filmid])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                                    @csrf

                                    <label for="exampleSelectGender">Category </label>
                                    <select class="form-control" name="category_id" >
                                        @foreach($data_category as $rs)
                                            <option @if   ($rs->id == $data->category_id) selected="selected"
                                                    @endif
                                                    value="{{$rs->id}}"> {{$rs->title}} </option>
                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                                    </div>

                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" >
                                    </div>

                                    <div class="form-group">
                                        <label >Desc</label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                    </div>

                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" class="form-control" name="image" >

                                    </div>

                                    <div class="form-group">
                                        <label >Image Slider</label>
                                        <input type="file" class="form-control" name="image_slider" >
                                    </div>

                                    <div class="form-group">
                                        <label >Detail</label>
                                        <textarea class="form-control" id="detail" rows="4" name="detail">{{$data->detail}}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail' ) )
                                                .then( editor => {
                                                    console.log( detail );
                                                } )
                                                .catch( error => {
                                                    console.error( detail );
                                                } );
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label >videolink</label>
                                        <input type="file" class="form-control" name="videolink" value="{{$data->videolink}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" name="status">
                                            <option value="{{$data->status}}">{{$data->status}}</option>

                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                                </form>

                            </div>




            </div>
        </section>
        <section class="content-body">

        </section>



    </div>
@endsection
