@extends('layouts.home')

@section('title', 'Referanslar -' . $setting->title)


@section('desc')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <div class="content-wrapper">

        <section class="content" style="background-color: #0b0c2a; color: white">

            <div class="content">
                <div class="card-header"><br>
                    <h3 class="card-title" style="color: whitesmoke">Referanslarımız</h3>
                </div>
                <div class="card-body">
                    {!! $setting->references !!}
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
@endsection
