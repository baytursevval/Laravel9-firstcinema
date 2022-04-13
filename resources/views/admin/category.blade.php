@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Basic Tables </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listem</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Adı</th>
                                    <th>Oluşturma Tarihi</th>
                                    <th>Durum</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Liste1</td>
                                    <td>12 Feb 2022</td>
                                    <td><label class="badge badge-danger">İzleniyor</label></td>
                                </tr>
                                <tr>
                                    <td>Liste2</td>
                                    <td>15 Oct 2021</td>
                                    <td><label class="badge badge-warning">Bekleniyor</label></td>
                                </tr>
                                <tr>
                                    <td>liste3</td>
                                    <td>14 May 2019</td>
                                    <td><label class="badge badge-info">Sıraya Alındı</label></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>16 Dec 2019</td>
                                    <td><label class="badge badge-success">İzlendi</label></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- content-wrapper ends -->
@endsection

