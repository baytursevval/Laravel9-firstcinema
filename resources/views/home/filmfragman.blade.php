@extends('layouts.filmdetay')

@section ('title', 'Film Fragman')

@section('content')

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <?php

                        use App\Models\User;
                        foreach ($data_category as $rs)
                            if ($rs->id == $data_film->category_id)
                                $cname=$rs->title;
                        ?>
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <a href="#">Kategoriler</a>
                        <span><a href="{{route('filmkategori',['category_id'=>$data_film->category_id])}}">{{$cname}} Filmleri </a>   </span>


                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <video id="player" playsinline controls data-poster="./videos/anime-watch.jpg">
                            <source src="{{asset('')}}storage/{{$data_film->videolink}}" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Anime Section End -->

@endsection
