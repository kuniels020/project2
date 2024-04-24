<table class="table table-compact table-stripped" id="data-jenis">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Jenis</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1; // Initialize $i outside the loop
        @endphp
        @foreach($jenis as $p)
        <tr>
            <td>{{ $i++ }}</td> <!-- Increment $i separately from the display -->
            <td>{{ $p->nama_jenis}}</td>
            <td>{{ $p->categori->nama}}</td>
            <td>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalFormjenis" data-mode="edit" data-id="{{ $p->id }}" data-nama_jenis="{{ $p->nama_jenis}}" data-categori_id="{{ $p->categori_id }}">
    <i class="fas fa-edit"></i>
</button>
                <form action="{{ route('jenis.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
