@extends('layouts.admin')


@section('title', ' Film ')

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
                    <h3 class="card-title">Film Tablosu</h3>

                </div>
                <div class="card-body">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('admin_film_add')}}">
                                <button type="button" class="btn btn-primary btn-rounded btn-fw">Film Ekle</button>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" >
                                        <thead>
                                        <tr>
                                            <th> Resim </th>
                                            <th> ID </th>
                                            <th> Title </th>

                                            <th> Kategori Id </th>
                                            <th> Edit </th>
                                            <th> Delete </th>
                                            <th> Detail </th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td> @if ($rs->image)
                                                    <img src="{{asset('')}}storage/{{$rs->image}}" style="width: 50px; height:50px">
                                                @endif
                                            </td>
                                            <td> {{$rs->id}} </td>
                                            <td> {{$rs->title}} </td>
                                            <td> {{$rs->category_id}} </td>
                                            <td> <a href="{{route('admin_film_edit', ['filmid'=>$rs->id])}}"> Edit </a></td>
                                            <td><a href="{{route('admin_film_delete', ['filmid'=>$rs->id])}}" onclick="return confirm('Are you sure?')" >Delete </a></td>

                                            <td> {{$rs->detail}}  </td>
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
