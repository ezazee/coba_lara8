@extends('layouts.admin')

@section('title') @lang('translation.Create_New') @endsection

@section('css')
     <!-- bootstrap datepicker -->
    <link href="{{ asset('/backend/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ asset('/backend/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi About</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title 1</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Enter Project Name..." value="Tentang" >
                            </div>
                        </div>
                         <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title 2</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Enter Project Name..." value="Apa itu Nyaku Bitung" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="description" name="description" type="text" class="form-control" style="height:100px;"
                                    placeholder="Enter Project Name..."></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="youtube" class="col-form-label col-lg-2">Youtube</label>
                            <div class="col-lg-10">
                            <input id="youtube" name="youtube" type="text" class="form-control"
                                    placeholder="Masukan link youtube" value="" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" alt="200x200" src="" data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bxs-duplicate label-icon"></i>Update Data</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/backend/js/datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ asset('/backend/js/dropzone.min.js') }}"></script>
@endsection
