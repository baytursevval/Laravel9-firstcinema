@extends('layouts.home')

@section('title', 'dinamik home page')

@section('slider')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{asset('assets')}}/filmhero/1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{asset('assets')}}/filmhero/2.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{asset('assets')}}/filmhero/3.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


@endsection

@section('content')
    <section class="product spad" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="trending__product" >
                        <div class="row" >
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Son Eklenenler</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                                @foreach($datalist as $rs)

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item">

                                            <a href="/filmdetay/{{$rs->id}}">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">
                                                    <div class="ep">18 / 18</div>
                                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                                </div>
                                            </a>


                                            <div class="product__item__text">
                                                <ul>
                                                    <li>HD</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="#">{{$rs->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <div class="trending__product" >
                        <div class="row" >
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>PAPULER OLANLAR</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($datalist as $rs)

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">

                                        <a href="/filmdetay/{{$rs->id}}">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>


                                        <div class="product__item__text">
                                            <ul>
                                                <li>HD</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="#">{{$rs->title}}</a></h5>
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
