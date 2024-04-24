@extends('template.home')

@push('style')

@endpush

@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"> Jenis </h3>

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
      <button type="btn" class="close" data-dismiss="alert" aria-label="Close">
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormjenis" data-bs-whatever="@getbootstrap">tambahkan</button>

    <div class="mt-3">
      @include('jenis.data')
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@include('jenis.form')
</section>
<!-- /.content -->
@endsection

@push('script')
<!-- Ensure jQuery is included before these scripts -->

<script>
    console.log("halaman category");
    
console.log('test')

$(document).ready(function() {
  $('#modalFormjenis').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget);
    const mode = btn.data('mode');
    const nama_jenis = btn.data('nama_jenis');
    const categori_id = btn.data('categori_id');
    const id = btn.data('id');
    const modal = $(this);

    console.log(mode)
    if (mode === 'edit') {
      
      modal.find('.modal-title').text('Edit Data jenis');
      modal.find('#nama_jenis').val(nama_jenis);
      modal.find('#categori_id').val(categori_id);
      modal.find('.modal-body form').attr('action', '{{ url("jenis") }}/' + id);
      modal.find('#method').html('@method("PUT")');
    } else {
      modal.find('.modal-title').text('Input Data jenis');
      modal.find('#nama_jenis').val(''); // Clear the input field if not in edit mode
      modal.find('#categori_id').val(''); // Clear the input field if not in edit mode
      modal.find('.modal-body form').attr('action', '{{ url("jenis") }}');
      modal.find('#method').html(''); // Clear the method input if not in edit mode
    }
  });
});
</script>


@endpush