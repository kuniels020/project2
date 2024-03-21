@extends('template.home')

@push('style')

@endpush

@section('content')
<!-- Default box -->
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
@include('category.edit')
</section>
<!-- /.content -->
@endsection

@push('script')
<!-- Ensure jQuery is included before these scripts -->

<script>
    console.log("halaman category");
    $(document).ready(function() {
        // Alert fade out
        $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
            $('.alert-success').slideUp(500);
        });

        // Delete data confirmation
        $('.delete-data').on('click', function(e) {
            e.preventDefault();
            const data = $(this).closest('tr').find('td:eq(1)').text();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(e.target).closest('form').submit();
                } else {
                    Swal.close();
                }
            });
        });

        // Edit data modal setup
        // Assuming you're using jQuery
        $('#modalEdit').on('show.bs.modal', function(e) {
    let button = $(e.relatedTarget);
    let id = button.data('id');
    let nama = button.data('nama');
    console.log("nama category: " + nama); // Populate the form fields
    $('#nama_category_edit').val(nama); // Corrected ID

    // Set the form action dynamically
    $('.form-edit').attr('action', `/category/${id}`);
});

    });
</script>

@endpush