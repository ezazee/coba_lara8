@extends('layouts.admin')

@section('title') @lang('translation.Create_New') @endsection

@section('css')
    <!-- bootstrap datepicker -->
    <link href="{{ asset('/backend/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ asset('/backend/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <style>
.ck-editor__editable_inline {
    min-height: 400px;
}
</style>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Hero</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Nama judul..." value="" >
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">asdasdd</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="slug" class="col-form-label col-lg-2">Link GooglePlay</label>
                            <div class="col-lg-10">
                                <input id="slug" name="slug" type="text" class="form-control"
                                    placeholder="isikan Link App GooglePlay..." value="" >
                                    @error('slug')
                                    <div class="alert alert-danger mt-1 mb-1">asdasdd</div>
                                     @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar Banner</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                                @error('gambar')
                                <div class="alert alert-danger mt-1 mb-1">asdasdd</div>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar HP</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                                @error('gambar')
                                <div class="alert alert-danger mt-1 mb-1">asdasdd</div>
                                @enderror
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

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                    uploadUrl: "",
        }
        } )
        .catch( error => {
            console.error( error );
        } );

        const imageConfiguration = {
    resizeOptions: [
        {
            name: 'resizeImage:original',
            value: null,
            icon: 'original'
        },
        {
            name: 'resizeImage:50',
            value: '50',
            icon: 'medium'
        },
        {
            name: 'resizeImage:75',
            value: '75',
            icon: 'large'
        }
    ],
    toolbar: [
        ...
        'resizeImage:50',
        'resizeImage:75',
        'resizeImage:original',
    ]
}

</script>

    <!-- bootstrap datepicker -->
    <script src="{{ asset('/backend/js/datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ asset('/backend/js/dropzone.min.js') }}"></script>
@endsection
