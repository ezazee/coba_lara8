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
                    <h4 class="card-title mb-4">Tambah Video</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Nama Video..." >
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1"></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Video</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload Video baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                                @error('gambar')
                                <div class="alert alert-danger mt-1 mb-1"></div>
                                @enderror
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" id="gambar-view" alt="200x200" src="/assets/images/preview.png" data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update data</button>
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
<script type="text/javascript">
    $('#gambar').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#gambar-view').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
   });
  </script>
       <!-- bootstrap datepicker -->
    <script src="{{ asset('/backend/js/datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ asset('/backend/js/dropzone.min.js') }}"></script>
@endsection
