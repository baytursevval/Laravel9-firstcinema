@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)


@section('desc')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <div class="content-wrapper">
        <div class="col-md-9 mx-auto">
        <section class="content" style="background-color: #0b0c2a; color: white">

            <div class="content">
                <div class="card-header">

                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="aside-title" style="color: whitesmoke">İletişim Bilgileri</h3>
                        {!! $setting->contact !!}
                    </div>
                    <div class="col-md-5">
                        <h3 class="aside-title" style="color: whitesmoke">İletişim Formu</h3>
                        İletişim Formu
                    </div>
                </div>

            </div>
        </section>
        </div>
    </div>
@endsection
