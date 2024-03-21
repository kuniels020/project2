<table class="table table-compact table-striped" id="data-menu">
    <thead>
        <tr>
            <th class="text-right">ID</th>
            <th class="text-right">Name</th>
            <th class="text-right">Harga</th>
            <th class="text-right">Image</th>
            <th class="text-right">Deskripsi</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach($menu as $p)
        <tr>
            <td>{{ $i = !isset($i) ? $i = 1 : ++$i }}</td>
            <td class="text-right">{{ $p->nama }}</td>
            <td class="text-right">{{ $p->harga }}</td>
            <td class="text-right">{{ $p->image }}</td>
            <td class="text-right">{{ $p->deskripsi }}</td>
            <td class="text-right">
            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $p->id }}" 
             data-nama="{{ $p->nama }}"
             data-harga="{{ $p->harga }}"
             data-image="{{ $p->image }}"
             data-deskripsi="{{ $p->deskripsi }}"
>
                 <i class="fas fa-edit"></i>
</button>
                </button>
                <form action="{{ route('menu.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
                </form>
                       
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>