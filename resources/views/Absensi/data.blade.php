<table class="table table-compact table-striped" id="data-menu">
    <thead>
        <tr>
            <th class="text-right">No</th>
            <th class="text-right">Name karyawan</th>
            <th class="text-right">Tanggal Masuk</th>
            <th class="text-right">Waktu masuk</th>
            <th class="text-right">Status</th>
            <th class="text-right">waktu selesai kerja</th>
        </tr>
    </thead>
    <tbody>
            @foreach($absensi as $p)
        <tr>
            <td>{{ $i = !isset($i) ? $i = 1 : ++$i }}</td>
            <td>{{ $p->Namakaryawan  }}</td>
            <td>{{ $p->tanggalMasuk }}</td>
            <td>{{ $p->waktuMasuk }}</td> 
            <td>{{ $p->status }}</td>
            <td>{{ $p->waktKeluar }}</td>
            
            <td>
            <form action="{{ route('Absensi.destroy', $p->id) }}" method="post" style="display: inline">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"> <i class="fas fa-trash"></i></button>
            
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>