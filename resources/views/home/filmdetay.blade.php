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
                        use App\Models\User;
                        foreach ($data_category as $rs)
                        if ($rs->id == $data_film->category_id)
                        $cname=$rs->title;
                        ?>
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <a href="#">Kategoriler</a>
                        <span><a href="{{route('filmkategori',['category_id'=>$data_film->category_id])}}"  >  {{$cname}} Filmleri </a>   </span>
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
                        <div class="anime__details__pic set-bg" data-setbg="{{asset('')}}storage/{{$data_film->image}}" >
                            <div class="comment"><i class="fa fa-comments"></i> {{$yorum_sayısı}}</div>
                          <!--  <div class="view"><i class="fa fa-eye"></i> 9141</div>-->
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>  {{$data_film->title}}    </h3>

                                <span>{{$data_film->description}}</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    @auth
                            @if($can_point=='True')
                                    <form method="POST" action="{{route('point_add',['film_id'=>$data_film->id])}}">
                                        @csrf
                                        <input type="number" value="0" min="0" max="10" name="point" ></input>
                                        <button type="submit"> Puan Ver</button>
                                    </form>
                                        }
                                @else
                                   <h6 style="color: wheat">Puan verildi</h6>
                                @endif
                                    @endauth
                                    @guest
                                        guest point
                                        @endguest
                                </div>
                                @if($datalist_point != null)
                                 <h6 style="color: whitesmoke"> Puanınız: {{$datalist_point->point}}</h6>
                                @endif
                            </div>
                            <p>{{$data_film->detail}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> {{$data_film->category->title}}</li>
                                            <li><span>Studios:</span> Lerche</li>
                                            <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                            <li><span>Status:</span> {{$data_film->status}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span>{{$data_film->point}} </li>
                                            <li><span>Votes:</span> {{$data_film->point_count}}</li>
                                            <li><span>Can like:</span> {{$can_like}}</li>
                                            <li><span>Quality:</span> HD</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                @auth
                                @if($can_like=="True")
                                <a href="{{route('likefilm',['film_id'=>$data_film->id])}}" class="follow-btn"><i class="fa fa-heart-o"></i> Like</a>
                                @else
                                        <a href="{{route('unlikefilm',['film_id'=>$data_film->id])}}" class="follow-btn"><i class="fa fa-heart-o"></i>UnLike</a>
                                    @endif

                                    @endauth

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

                     @foreach($datalist_comment as $rs)
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="{{asset('')}}storage/{{$rs->user->image}}" alt="">
                            </div>
                            <div class="anime__review__item__text">


                                <h6 style="color:wheat"> {{$rs->user->name}}</h6>
                                <p> {{ $rs->comment  }}  </p>
                                <h6> {{$rs->created_at}} </h6>

                            </div>
                        </div>
                        @endforeach

                    @auth()
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Yorum Ekle</h5>
                        </div>
                        <form method="post" action="{{route('comment_add', ['film_id'=>$data_film->id])}}">
                            @csrf
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
