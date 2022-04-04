<html>
<head>
    <title>AppName - @yield('title')</title>
</head>
@yield('head')
<body>
@section('header')
    Header.<br>
@show

@section('sidebar')
    master sidebar.<br>
@show

@yield('slider')

<div class="container">
    @yield('content')
</div>

@section('footer')
    Footer.<br>
@show

</body>
</html>
