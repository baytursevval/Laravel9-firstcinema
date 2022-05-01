@extends('layouts.home')

@section('title', $setting->title)
@section('desc')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row ab-2">
                <div class="col-sm-6">
                    <h3>Blank Pageeee</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a> </li>
                        <li class="breadcrumb-item active">Blank Page </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

            </div>
            <div class="card-body">
                Body Area
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>
</div>
@endsection
