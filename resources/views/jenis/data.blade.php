<table class="table table-compact table-stripped" id="data-jenis">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Jenis</th>
            <th>Kategori Id</th>
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
            <td>{{ $p->kategori_id}}</td>
            <td>{{ $p->created_at}}</td>
            <td>{{ $p->updated_at}}</td>
            <td>
                <button class="btn btn-primary show-modal" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{$p->id}}" 
                data-nama_jenis="{{$p->nama_jenis}}" data-jenis="{{$p->jenis}}">
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
