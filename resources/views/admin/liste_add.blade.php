@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">
                    <div class="col-sm-6">
                        <h3>Liste Ekle</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste +</h3>

                </div>
                <form role="form" action="{{route('admin_category_add')}}" method="post">
                <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">Yeni Liste</h4>
                        <div class="form-group">
                            <label>Adı</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Oluş. Tarihi</label>
                            <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                <option>Izleniyor</option>
                                <option>Bekliyor</option>
                                <option>Sıraya Al</option>
                                <option>Izlendi</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Oluştur</button>
                </div>
                </form>
                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>
    </div>
@endsection
