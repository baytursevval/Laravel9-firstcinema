<html>

<head>
    <title>Image Gallery</title>

    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/favicon.png" />
</head>
<body>





            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Image</h3>
                </div>

                <div class="card-body">
                    <h3 class="card-title">{{$data->title}}</h3>
                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('admin_image_store', ['film_id'=>$data->id])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" name="title" >
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                            </form>

                                <table class="table table-bordered" >
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Title </th>
                                        <th> Image</th>
                                        <th> Actions </th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <td> {{$rs->id}} </td>
                                            <td> {{$rs->title}} </td>
                                            <td> @if ($rs->image)
                                                    <img src="{{asset('')}}storage/{{$rs->image}}" height="60" alt="">
                                                @endif
                                            </td>

                                            <td> <a href="{{route('admin_image_delete', ['id'=>$rs->id, 'film_id'=>$data->id])}}" onclick="return confirm('Are you sure?')" >
                                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                                        <i class="mdi mdi-delete"></i>
                                                    </div> </a>
                                            </td>
                                        </tr>
                            @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>

</body>
</html>
