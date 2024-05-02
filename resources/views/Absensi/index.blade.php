@extends('template.home')

@push('style')
<!-- Tambahkan style kustom jika diperlukan -->
@endpush

@section('content')
<!-- Default box -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Absensi kerja</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormAbsensi" data-bs-whatever="@getbootstrap">tambah data</button>

            <div class="mt-3">
                @include('Absensi.data')
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    @include('Absensi.edit')
</div>
@include('Absensi.form')

<!-- /.card -->

@endsection

@push('script')
<script>
    console.log("halaman category");
    
console.log('test')

$(document).ready(function() {
  $('#modalFormAbsensi').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget);
    const mode = btn.data('mode');
    const NamaKaryawan = btn.data('NamaKaryawan');
    const tanggalMasuk = btn.data('tanggalMasuk');
    const waktuMasuk = btn.data('waktuMasuk');
    const status = btn.data('status');
    const waktKeluar = btn.data('waktKeluar');

    const nama = btn.data('nama');

    const id = btn.data('id');
    const modal = $(this);

    console.log(mode)
    if (mode === 'edit') {
      
      modal.find('.modal-title').text('Edit Data Absensi');
      modal.find('#NamaKaryawan').val(NamaKaryawan);
      modal.find('#tanggalMasuk').val(tanggalMasuk);
      modal.find('#waktuMasuk').val(waktuMasuk);
      modal.find('#status').val(status);
      modal.find('#waktKeluar').val(waktKeluar);
      modal.find('.modal-body form').attr('action', '{{ url("Absensi") }}/' + id);
      modal.find('#method').html('@method("PUT")');
    } else {
      modal.find('.modal-title').text('Input Data Absensi');
      modal.find('#NamaKaryawan').val(''); // Clear the input field if not in edit mode
      modal.find('#tanggalMasuk').val(''); // Clear the input field if not in edit mode
      modal.find('#waktuMasuk').val(''); // Clear the input field if not in edit mode
      modal.find('#status').val(''); // Clear the input field if not in edit mode
      modal.find('#waktKeluar').val(''); // Clear the input field if not in edit mode
      modal.find('.modal-body form').attr('action', '{{ url("Absensi") }}');
      modal.find('#method').html(''); // Clear the method input if not in edit mode
    }
  });
});
</script>

@endpush