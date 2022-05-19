@extends('layouts.home')

@section('title', 'Questions')

@section('headerjs')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>


@endsection

@section('content')


<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row ab-2">
                <div class="col-sm-6">
                    <h3></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a> </li>
                        <li class="breadcrumb-item active">Blank Page </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="card" style="background-color: #0c2b4b">
            <div class="card-header">
                <h3 class="card-title" style="color: ghostwhite">Sıkca Sorulan Sorular</h3>
            </div>
            <div class="card-body" style="background-color: #0b0c2a">
                <div id="accordion">
                @foreach($datalist as $rs)

                        <h2 style="color: wheat"> {{$rs->question}}</h2>
                        <div>
                        <p>{!! $rs->answer !!}</p>
                     </div>
                @endforeach
                </div>
            </div>


            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>
</div>
@endsection
