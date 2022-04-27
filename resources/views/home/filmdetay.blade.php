@extends('layouts.filmdetay')

@section ('title', 'Film Detay')

@section('content')


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <?php

                        //"$rs=$data[0];
                      //  echo $data->title;


foreach ($data_category as $rs)
            if ($rs->id == $data->category_id)
                $cname=$rs->title;




                        ?>
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <a href="#">Kategoriler</a>
                        <span><a href="{{route('filmkategori',['category_id'=>$data->category_id])}}"  >  {{$cname}} Filmleri </a>   </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{asset('')}}storage/{{$data->image}}" >
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>  {{$data->title}}    </h3>


                                <span>{{$data->description}}</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p>{{$data->detail}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> TV Series</li>
                                            <li><span>Studios:</span> Lerche</li>
                                            <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                            <li><span>Status:</span> Airing</li>
                                            <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>Rating:</span> 8.5 / 161 times</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                <a href="#" class="watch-btn"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Film Reviews</h5>
                        </div>

                     @foreach($data_comment as $rs)
                            @php
                            //$comment=$data_comment[0];
                            @endphp

                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-3.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Louis Tyler - <span>{{$rs->created_at}}</span></h6>
                                <p> {{ $rs->comment  }}  </p>
                            </div>
                        </div>

                        @endforeach



                    @auth()
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Yorum Ekle</h5>
                        </div>
                        <form action="{{route('comment_add', ['film_id'=>$data->id])}}">
                            <textarea name="comment" placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Gönder</button>
                        </form>
                    </div>
                    @endauth

                    @guest
                        LOGIN

                    @endguest

                </div>

            </div>
        </div>
    </section>
    <!-- Anime Section End -->

@endsection
