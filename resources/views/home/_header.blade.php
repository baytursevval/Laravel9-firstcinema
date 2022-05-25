<?php
use Illuminate\Support\Facades\Auth;$datalist = DB::table('categories')->get();


?>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <div class="header__logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/6.jpg" width="100px" height="50px">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Anasayfa</a></li>
                            <li><a href="{{route('admin_category')}}">Kategoriler <span class="arrow_carrot-down"></span></a>

                                <ul class="dropdown">
                                    @foreach ($datalist as $item)

                                    <li><a href="/filmkategori/{{$item->id}}">{{$item->title}} </a></li>
                                    @endforeach

                                </ul>
                            </li>

                            <li><a href="{{route('aboutus')}}">Hakkımızda<span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('references')}}">Referanslar </a></li>
                                    <li><a href="{{route('faq')}}">Sıkça Sorulan Sorular </a></li>
                                </ul>
                            </li>

                            <li><a href="{{route('contact')}}">İletişim</a></li>
                            @auth
                                <?php
                            $username=Auth::user()->name;
                                 ?>
                            <li><a href="#">{{$username}} <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('myprofile')}}">My Profile </a></li>
                                    <li><a href="{{route('mycomments')}}">My Reviews </a></li>
                                    <li><a href="{{route('user_film_like',['user_id'=>Auth::user()->id])}}">My favs</a></li>
                                    <li><a href="{{route('user_film')}}">My Films </a></li>
                                    <li><a href="{{route('admin_logout')}}">Logout </a></li>

                                </ul>
                            </li>
                            @endauth
                            <li><form action="{{route('filmsearch')}}" method="post">
                                    @csrf
                                    <input type="text" name="search" style="width: 150px" placeholder="ara...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form></li>
                        </ul>

                    </nav>

                </div>

            </div>
            <div class="col-lg-1">
                <div class="header__right">
                <!--    <input name="search" type="text" placeholder="ara" width="10 px"> -->
                    @guest
                    <a href="{{route('login')}}"><span class="icon_profile"></span>Giriş Yap</a>
                    @endguest

                    @auth
                        <a href="{{route('admin_logout')}}"><span class="icon_profile"></span>Çıkış</a>
                    @endauth
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
