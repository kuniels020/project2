<table class="table table-compact table-stripped" id="data-category">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categori as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nama}}</td>
            <td>{{ $p->created_at}}</td>
            <td>{{ $p->updated_at}}</td>
            <td>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalFormcategegori" data-mode="edit" data-id="{{ $p->id }}" data-nama="{{ $p->nama }}">
    <i class="fas fa-edit"></i>
</button>

                <form action="{{ route('category.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
</form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>