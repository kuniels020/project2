<table class="table table-compact table-stripped" id="data-meja">
    <thead>
        <tr>
            <th>No.</th>
            <th>No Meja</th>
            <th>kapasitas</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mejas as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nomor_meja}}</td>
            <td>{{ $p->kapasitas}}</td>
            <td>{{ $p->status}}</td>
            <td>{{ $p->created_at}}</td>
            <td>{{ $p->updated_at}}</td>
            <td>
                <button class="btn btn-primary show-bs-modal" data-bs-toggle="modal" data-bs-target="#modalFormMeja" data-mode="edit" data-id="{{$p->id}}" data-nomor_meja="{{$p->nomor_meja}}" data-kapasitas="{{$p->kapasitas}}" data-status="{{$p->status}}">
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('meja.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>