@extends('layouts.admin')


@section('title', ' Faq ')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">
                    <div class="col-sm-6">
                        <h3>Frenquently Asked Questions</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">Frenquently Asked Questions</li>
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
                                <a href="{{route('admin_faq_add')}}">
                                    @include('home.message')
                                <button type="button" class="btn btn-primary btn-rounded btn-fw">Faq Ekle</button><br>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" >
                                        <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Question </th>
                                            <th> Answer </th>
                                            <th> Status </th>
                                            <th> Edit </th>
                                            <th> Delete </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>

                                            <td> {{$rs->id}} </td>
                                            <td> {{$rs->question}} </td>
                                            <td> {!! $rs->answer !!} </td>
                                            <td> {{$rs->status}} </td>
                                            <td> <a href="{{route('admin_faq_edit', ['faqid'=>$rs->id])}}"> <i class="mdi mdi-tooltip-edit"></i> </a></td>
                                            <td><a href="{{route('admin_faq_delete', ['faqid'=>$rs->id])}}" onclick="return confirm('Are you sure?')" > <div class="col-sm-6 col-md-4 col-lg-3">
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
