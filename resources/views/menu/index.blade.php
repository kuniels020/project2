@extends('template.home')

@push('style')
<!-- Tambahkan style kustom jika diperlukan -->
@endpush

@section('content')
<!-- Default box -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menuu</h3>
            

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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormmenu" data-bs-whatever="@getbootstrap">tambah menu</button>
            <a href ="#" class="btn btn-success">
      <i class="fas fa-file-excel"></i>export excel
    </a>
    <a href ="#" class="btn btn-success">
      <i class="fas fa-file-pdf"></i>export pdf
    </a>
            <div class="mt-3">
                @include('menu.data')
            </div>
        </div>
        
            
            
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>

</div>

@include('menu.form')

<!-- /.card -->

@endsection

@push('script')
<script>
   


    console.log("halaman category");
    
console.log('test')

$(document).ready(function() {
  $('#modalFormmenu').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget);
    const mode = btn.data('mode');
    const nama_menu = btn.data('nama_menu');
    const harga = btn.data('harga');
    const image = btn.data('image');
    const deskripsi = btn.data('deskripsi');
    const jenis_id = btn.data('jenis_id');
    const id = btn.data('id');
    const modal = $(this);

    console.log(mode)
    if (mode === 'edit') {
      
      modal.find('.modal-title').text('Edit Data menu');
      modal.find('#nama_menu').val(nama_menu);
      modal.find('#harga').val(harga);
      modal.find('#image').val(image);
      modal.find('#deskripsi').val(deskripsi);
      modal.find('#jenis_id').val(jenis_id);
      modal.find('.modal-body form').attr('action', '{{ url("menu") }}/' + id);
      modal.find('#method').html('@method("PUT")');
    } else {
      modal.find('.modal-title').text('Input Data menu');
      modal.find('#nama_menu').val(''); // Clear the input field if not in edit mode
      modal.find('#harga').val(''); // Clear the input field if not in edit mode
      modal.find('#image').val(''); // Clear the input field if not in edit mode
      modal.find('#deskripsi').val(''); // Clear the input field if not in edit mode
      modal.find('#jenis_id').val(''); // Clear the input field if not in edit mode
      modal.find('.modal-body form').attr('action', '{{ url("menu") }}');
      modal.find('#method').html(''); // Clear the method input if not in edit mode
    }
  });
});
</script>

@endpush