@extends('template.home')

@push('style')
<!-- Tambahkan style kustom jika diperlukan -->
@endpush

@section('content')
<!-- Default box -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menu</h3>

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
    @include('menu.edit')
</div>
@include('menu.form')

<!-- /.card -->

@endsection

@push('script')
<<script>
    $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-success').slideUp(500);
    });

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

    $(document).on('show.bs.modal', '#modal', function(e) {
        alert('tes');
        let button = $(e.relatedTarget);
        let id = button.data('id');
        let nama = button.data('nama');
        let harga = button.data('harga');
        let image = button.data('image');
        let deskripsi = button.data('deskripsi');
        console.log(id);
        $('#nama_menu').val(nama);
        $('#harga').val(harga);
        $('#image').val(image);
        $('#deskripsi').val(deskripsi);
        $('#form-menu').attr('action', `/menu/${id}`);
    });

    $(document).on('show.bs.modal', '#modalEdit', function(e) {
        let button = $(e.relatedTarget);
        let id = button

@endpush