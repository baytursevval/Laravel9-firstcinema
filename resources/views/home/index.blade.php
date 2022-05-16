@extends('layouts.home')

@section('title', $setting->title)
@section('desc')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('slider')
    <!-- Hero Section Begin -->

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">

                <div class="hero__items set-bg" data-setbg="{{asset('')}}storage/{{$datalist_slider[0]->image_slider}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                @php
                                    foreach ($datalist_category as $rs)
                                                  if( $rs->id == $datalist_slider[0]->category_id) $cname=$rs->title;
                                           // echo " cat_id=".$rs->id . " cat name= ".$rs->title      .   " <br>";
                                @endphp
                                <div class="label"> {{$datalist_slider[0]->category->title}}  </div>
                                <a href="{{route('filmdetay', ['film_id'=>$datalist_slider[0]->id])}}" ><h2>{{$datalist_slider[0]->title}}</h2></a>

                                <a href="#"><span>Fragman İzle</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hero__items set-bg" data-setbg="{{asset('')}}storage/{{$datalist_slider[1]->image_slider}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                @php
                                    foreach ($datalist_category as $rs)
                                                  if( $rs->id == $datalist_slider[1]->category_id) $cname=$rs->title;
                                           // echo " cat_id=".$rs->id . " cat name= ".$rs->title      .   " <br>";
                                @endphp
                                <div class="label">  {{$datalist_slider[1]->category->title}} </div>
                                <a href="{{route('filmdetay', ['film_id'=>$datalist_slider[1]->id])}}" ><h2>{{$datalist_slider[1]->title}}</h2></a>

                                <a href="#"><span>Fragman İzle</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="{{asset('')}}storage/{{$datalist_slider[2]->image_slider}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">

                                <div class="label"> {{$datalist_slider[2]->category->title}} </div>
                                <a href="{{route('filmdetay', ['film_id'=>$datalist_slider[2]->id])}}" ><h2>{{$datalist_slider[2]->title}}</h2></a>

                                <a href="#"><span>Fragman İzle</span> <i class="fa fa-angle-right"></i></a>
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

                                @foreach($datalist_son as $rs)

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item">

                                            <a href="/filmdetay/{{$rs->id}}">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">
                                                    <!--    <div class="ep">18 / 18</div>
                                                       <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                       <div class="view"><i class="fa fa-eye"></i> 9141</div>-->
                                                </div>
                                            </a>


                                            <div class="product__item__text">
                                                <ul>
                                                    <li>HD</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="{{route('filmdetay',['film_id'=>$rs->id])}}">{{$rs->title}}</a></h5>
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
                                    <h4>PAPULER OLANLAR
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($datalist_populer as $rs)

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">

                                        <a href="/filmdetay/{{$rs->id}}">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">
                                                <!--     <div class="ep">18 / 18</div>
                                              <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                            </div>
                                        </a>


                                        <div class="product__item__text">
                                            <ul>
                                                <li>HD</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="{{route('filmdetay',['film_id'=>$rs->id])}}">{{$rs->title}}</a></h5>
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
