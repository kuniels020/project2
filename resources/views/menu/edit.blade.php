<!-- Modal -->
<div class="modal fade iniModalEdit" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="menu" class="form-edit" id="form-edit-menu">
          @csrf
          @method('PUT') <!-- or @method('PATCH') -->
          <div class="form-group row">
            <label for="nama_menu" class="col-sm-2 col-form-label">Nama menu</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_menu_edit" name="nama" placeholder="Nama menu">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="harga_edit" name="harga" placeholder="Harga">
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="image_edit" name="image" placeholder="Image">
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="deskripsi_edit" name="deskripsi" placeholder="Deskripsi">
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
