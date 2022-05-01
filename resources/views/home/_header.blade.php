<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/mylogo.png" width="100px" height="50px">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Anasayfa</a></li>
                            <li><a href="{{route('admin_category')}}">Kategoriler <span class="arrow_carrot-down"></span></a>
                                <?php
                                use Illuminate\Support\Facades\Auth;$datalist = DB::table('categories')->get();
                                 ?>
                                <ul class="dropdown">
                                    @foreach ($datalist as $item)

                                    <li><a href="/filmkategori/{{$item->id}}">{{$item->title}} </a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">İletişim</a></li>
                            @auth
                                <?php
                            $username=Auth::user()->name;
                                 ?>
                            <li><a href="#">{{$username}} <span class="arrow_carrot-down"></span></a>

                                <ul class="dropdown">

                                        <li><a href="{{route('myprofile')}}">My Profile </a></li>
                                    <li><a href="#">My Profile </a></li>
                                    <li><a href="#">My Profile </a></li>

                                </ul>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                <!--    <input name="search" type="text" placeholder="ara" width="10 px"> -->
                    <a href="#0000" class="search-switch"> <span class="icon_search"></span></a>
                    @guest
                    <a href="{{route('admin_login')}}"><span class="icon_profile"></span> Giriş Yap</a>
                    @endguest

                    @auth
                        <a href="{{route('admin_logout')}}"><span class="icon_profile"></span> Çıkış Yap</a>
                    @endauth
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
