
<!-- Css Styles -->
<link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/plyr.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">

<div class="content-wrapper">


        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Mesaj Detayı</h3>
                @include('home.message')
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                <table class="table table-bordered" >
                                    <tr>
                                        <th> ID </th><th> {{$data->id}} </th>
                                    </tr>

                                    <tr>
                                        <th> İsim </th><th> {{$data->name}} </th>
                                    </tr>

                                    <tr>
                                        <th> Email </th><th> {{$data->email}} </th>
                                    </tr>

                                    <tr>
                                    <th> Telefon</th><th> {{$data->phone}} </th>
                                    </tr>

                                    <tr>
                                    <th> Konu </th><th> {{$data->subject}} </th>
                                    </tr>

                                    <tr>
                                        <th> Mesaj </th><th> {{$data->message}} </th>
                                    </tr>

                                    <tr>
                                        <th> Admin Notu </th>

                                    <td>
                                        <textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>
                                    </tr>
                                    <td>

                                    </td>
                                    <tr>
                                        <td></td><td>
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        </td>
                                    </tr>

                                    <tr>
                                </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
