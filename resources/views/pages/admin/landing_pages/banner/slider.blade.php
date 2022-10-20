@extends('layouts.admin')

@section('title') @lang('translation.Dashboards') @endsection
@section('css')
<!-- Sweet Alert-->
<link href="{{ asset('/backend/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                      
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
              
                <h4 class="card-title mb-2">List Banner</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="/admin/slider/create" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Alt Image</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold"></a> </td>
                                <td></td>
                                <td><img src="" class="rounded me-2" data-holder-rendered="true" width="100"></td>
                                <td>
                                    <form action="/admin/slider/edit" method="POST">
                                        <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href=""><i class="bx bx-edit  label-icon"></i>Edit</a>
                                      
                                        <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="bx bxs-trash label-icon"></i>Hapus</button>
                                    </form>
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

<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!"
      })
          .then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
      });

</script>

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/backend/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/backend/js/sweet-alerts.init.js') }}"></script>
@endsection