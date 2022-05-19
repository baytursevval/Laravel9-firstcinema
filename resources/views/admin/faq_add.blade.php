@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

@section('javascript')
  /*  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

 */

  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row ab-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active">Frenquently Asked Questions </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Faq Ekle</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin_faq_store') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" class="form-control" name="question" >
                                </div>

                                <div class="form-group">
                                    <label >Answer</label> <br>
                                    <textarea id="answer" name="answer"></textarea>

                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
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
@endsection
