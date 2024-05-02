@extends('template.home')

@push('style')
<!-- Tambahkan style kustom jika diperlukan -->
@endpush

@section('content')

<div class="filter">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">
      <h6>Filter</h6>
    </li>

    <li><a class="dropdown-item" href="#">Today</a></li>
    <li><a class="dropdown-item" href="#">This Month</a></li>
    <li><a class="dropdown-item" href="#">This Year</a></li>
  </ul>
</div>

<div class="card-body">
  <h5 class="card-title">Recent Sales <span>| Top 5 </span></h5>

  <table class="table table-borderless datatable">
    <thead>
      <tr class="text-center">
        <th scope="col" class="text-center">No</th>
        <th scope="col" class="text-center">Menu</th>
        <th scope="col" class="text-center">Stock</th>
      </trc>
    </thead>
    <tbody>
      @foreach($stock as $s)
      <tr class="text-center">
          <td>{{ $loop->iteration }}</td>
          <td>{{ $s->menu->nama }}</td>
          <td>{{ $s->jumlah }}</td>
         
      </tr>
      @endforeach
  </tbody>
  </table>

</div>



@endsection

