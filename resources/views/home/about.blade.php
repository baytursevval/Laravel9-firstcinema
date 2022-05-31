@extends('layouts.home')

@section('title', 'About Us -' . $setting->title)


@section('desc')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <div class="content-wrapper">
        <div class="col-md-9 mx-auto">
        <section class="content" style="background-color: #0b0c2a; color: ghostwhite">

            <div class="content">

                <div class="card-body">
                    {!! $setting->aboutus !!}
                </div>
                <div class="card-footer">

                </div>
            </div>
        </section>
        </div>
    </div>
@endsection
