@extends('layouts.home')

@section('title', 'dinamik home page')


@section('content')
    <section class="product spad" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="trending__product" >
                        <div class="row" >
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Arama Sonuçları</h4>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            @foreach($datalist_search as $rs)

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">

                                        <a href="/filmdetay/{{$rs->id}}">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">

                                            </div>
                                        </a>


                                        <div class="product__item__text">
                                            <ul>
                                                <li>HD</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="/filmdetay/{{$rs->id}}">{{$rs->title}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
@endsection
