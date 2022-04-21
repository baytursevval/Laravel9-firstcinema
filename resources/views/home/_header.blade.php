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
                        <img src="{{asset('assets')}}/mylogo.png" width="70" alt="">
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
                                 $datalist = DB::table('categories')->get();
                                 ?>
                                <ul class="dropdown">
                                    @foreach ($datalist as $item)

                                    <li><a href="/filmkategori/{{$item->id}}">{{$item->title}} </a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="admin/login"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
