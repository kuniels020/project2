<table class="table table-compact table-stripped" id="data-category">
    <thead>
        <tr>
            <th>No.</th>
            <th>Menu_ID</th>
            <th>jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stock as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->menu_id}}</td>
            <td>{{ $p->jumlah}}</td>
            <td>
                <button class="btn btn-primary show-bs-modal" data-bs-toggle="modal" data-bs-target="#modalfromstock"
                    data-mode = "edit"
                    data-id = "{{$p->id}}"
                    data-menu_id="{{$p->menu_id}}"
                    data-jumlah="{{$p->jumlah}}"
                    >
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('stock.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
</form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>