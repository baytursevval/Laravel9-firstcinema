@extends('layouts.home')

@section('title', 'dinamik home page')


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

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($datalist as $rs)

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">

                                        <a href="/filmdetay/{{$rs->id}}">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('')}}storage/{{$rs->image}}">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>


                                        <div class="product__item__text">
                                            <ul>
                                                <li>HD</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="#">{{$rs->title}}</a></h5>
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
