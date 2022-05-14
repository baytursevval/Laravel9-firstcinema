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
                        <br>
                        {!! $setting->contact !!}
                    </div>
                    <div class="col-md-5">
                        <h3 class="aside-title" style="color: whitesmoke">İletişim Formu</h3>
                       <br>
                        @include('home.message')
                        <div class="blog__details__form">
                            <form action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="name" placeholder="Name & Surname">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        </div>
    </div>
@endsection
