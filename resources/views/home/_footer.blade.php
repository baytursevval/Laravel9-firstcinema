@php
$setting= \App\Http\Controllers\Admin\SettingController::getSettings()

@endphp

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

                <div class="footer__logo">
                   <!-- <a href="./index.html"><img src="img/logo.png" alt=""></a>-->

                    <strong>Company: {{$setting->company}}</strong>
                    <strong>Adres: {{$setting->adress}}</strong>
                    <ul>
                        @if ($setting->twitter != null ) <li><a href="{{$setting->twitter}}" target="_blank"><i class="mdi mdi-twitter" tar></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li ><a href="{{route('home')}}" >Homepage</a></li>
                        <li><a href="#" target="_blank">Categories</a></li>
                        <li><a href="{{route('aboutus')}}" target="_blank">Our Blog</a></li>
                        <li><a href="{{route('contact')}}" target="_blank">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->title}}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->


<!-- Js Plugins -->
<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/player.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/mixitup.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
