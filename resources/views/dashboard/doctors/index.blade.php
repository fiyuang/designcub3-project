@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Our Doctors</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Dokter Gigi</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#form-doctor"
                style="margin-bottom: 20px;">
                <i class="fa fa-plus"></i>&nbsp; &nbsp; Tambah Dokter
            </a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Dokter</th>
                            <th>No. Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->mobile_number }}</td>
                            <td><button type="button" class="btn btn-danger btn-sm"
                                    data-toggle="modal"
                                    data-target="#remove-data-popup"
                                    data-action="{{ route('doctors.destroy', ['id' => $doctor->id]) }}"
                                  >
                                  <i class="fas fa-trash"></i>
                                  Hapus
                              </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="form-doctor" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group col">
                        <label for="name">Nama Dokter</label>
                        <input type="text" name="name" id="name" class="form-control" value="" placeholder="drg. ...">
                    </div>

                    <div class="form-group col">
                        <label for="mobile_number">No Telepon</label>
                        <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="" placeholder="contoh: 0878xxxx">
                    </div>

                    <div class="form-group col">
                        <label for="dob">Tanggal Lahir</label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success!</strong> {{ Session::get('message', '') }}
    </div>
@endif

<!-- /.container-fluid -->
@endsection

@section('scripts')
<script type="text/javascript">

    function removeAction() {
        $('[data-target="#remove-data-popup"]').on('click', function (e) {
          $("#remove-data-popup form").attr("action", $(this).data('action'));
        });
    }

    $(document).ready(function () {
        removeAction();
    })

</script>
@endsection
