<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" class="form-edit">
          @csrf
          @method('POST')
          <div class="form-group row">
            <label for="nama_jenis" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" placeholder="Nama Jenis">
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori_id" class="col-sm-2 col-form-label">kategori_id</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="kategori_id" name="kategori_id" placeholder="Kategori_id">
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>