
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
                    <h3 class="card-title">Edit User</h3>
                @include('home.message')
                </div>
                <div class="card-body">

                                <table class="table table-bordered">
                                    <tr>
                                        <th rowspan="6">
                                        <td> @if ($data->image)
                                                <img src="{{asset('')}}storage/{{$data->image}}" style="width: 50px; height:50px">
                                            @endif
                                        </td>

                                        </th> <td>{{$data->id}}</td>
                                    </tr>




                                    <tr>
                                        <th> İsim </th><th> {{$data->name}} </th>
                                    </tr>

                                    <tr>
                                        <th> Email </th><th> {{$data->email}} </th>
                                    </tr>

                                    <tr>
                                        <th> Roles </th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}}</td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                                               onclick="return confirm('Are you sure?')"><i class="mdi mdi-delete-variant"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Add Roles</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" cenctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary mr-2">Add Role</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
