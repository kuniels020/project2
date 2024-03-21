<table class="table table-compact table-stripped" id="data-produk_titipan">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Nama Supplier</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stock</th>
            <th>keterangan</th>

        </tr>
    </thead>
    <tbody>
        @foreach($produk_titipan as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nama_produk}}</td>
            <td>{{ $p->nama_supplier}}</td>
            <td>{{ $p->harga_beli}}</td>
            <td>{{ $p->harga_jual}}</td>
            <td>{{ $p->stock}}</td>
            <td>{{ $p->ket}}</td>
            
            <td>
                <button class="btn btn-primary show-bs-modal" data-toggle="modal" data-target="#modalEdit"
                    data-mode = "edit"
                    data-id = "{{$p->id}}"
                    data-menu_id="{{$p->menu_id}}"
                    data-jumlah="{{$p->jumlah}}"
                    >
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('produk_titipan.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
</form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>