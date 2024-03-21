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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">tambahkan</button>

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
@include('jenis.edit')
</section>
<!-- /.content -->
@endsection

@push('script')
<!-- Ensure jQuery is included before these scripts -->


        // Edit data modal setup
       // Assuming you're using jQuery
$(document).ready(function() {
    $('#modalEdit').on('show.modal', function(e) {
        let button = $(e.relatedTarget);
        let id = button.data('id');
        let nama = button.data('nama');
        console.log("nama jenis : " + nama)        // Populate the form fields
        $('#nama_edit').val(nama);

        // Set the form action dynamically
        $('.form-edit').attr('action', `/jenis/${id}`);
    });
});

</script>

@endpush