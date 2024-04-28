@extends('template.home')

@push('style')

@endpush

@section('content')
<!-- Default box -->
<section>
<div class="card">
  <div class="card-header">
    <h3 class="card-title"> Category </h3>

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
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    @endif
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormcategegori" data-bs-whatever="@getbootstrap">tambah categori</button>
    <a href ="#" class="btn btn-success">
      <i class="fas fa-file-excel"></i>export excel
    </a>
    <a href ="#" class="btn btn-success">
      <i class="fas fa-file-pdf"></i>export pdf
    </a>
    <div class="mt-3">
      @include('category.data')
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@include('category.form')
</section>
<!-- /.content -->
@endsection

@push('script')
<!-- Ensure jQuery is included before these scripts -->

<script>
    console.log("halaman category");
    
console.log('test')

$(document).ready(function() {
  $('#modalFormcategegori').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget);
    const mode = btn.data('mode');
    const nama = btn.data('nama');
    const id = btn.data('id');
    const modal = $(this);

    console.log(mode)
    if (mode === 'edit') {
      
      modal.find('.modal-title').text('Edit Data category');
      modal.find('#nama').val(nama);
      modal.find('.modal-body form').attr('action', '{{ url("category") }}/' + id);
      modal.find('#method').html('@method("PUT")');
    } else {
      modal.find('.modal-title').text('Input Data category');
      modal.find('#nama').val(''); // Clear the input field if not in edit mode
      modal.find('.modal-body form').attr('action', '{{ url("category") }}');
      modal.find('#method').html(''); // Clear the method input if not in edit mode
    }
  });
});
</script>

@endpush