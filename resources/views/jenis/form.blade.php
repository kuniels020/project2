<!-- Modal -->
<div class="modal fade" id="modalFormjenis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">input data jenis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="jenis">
          @csrf
          <div id="method"></div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nama Jenis</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
            </div>
          </div>
          <div class="form-group row">
            <label for="categori_id" class="col-sm-4 col-form-label">Kategori</label>
            <select name="categori_id" id="categori_id">
              <option value="">pilih id</option>
            @foreach($categori as $p => $label)
              <option value="{{ $p }}">{{ $label }}</option>
               @endforeach
            </select> 
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>

      </div>
      </form>
    </div>
  </div>
</div>