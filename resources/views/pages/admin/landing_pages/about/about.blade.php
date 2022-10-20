@extends('layouts.admin')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">About Section</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Title 1</th>
                                <th class="align-middle">Title 2</th>
                                <th class="align-middle">Deskripsi</th>
                                <th class="align-middle">Youtube</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a> </td>
                                <td>Tentang</td>
                                <td>Apa itu Nyaku Bitung</td>
                                <td><div style="width: 442px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;"></div>Ini Contoh Deskripsi About Yang bisa diubah</td>
                                <td>Link Youtube Video</td>
                                <td><img class="rounded me-2" alt="200x200" src="" data-holder-rendered="true" width="100"></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="/admin/about/edit" type="button" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit  label-icon"></i> Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<!-- dashboard init -->
<script src="{{ asset('/backend/js/dashboard.init.js') }}"></script>
@endsection