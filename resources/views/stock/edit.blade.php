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
          @method('PUT')
          <div class="form-group row">
            <label for="menu_id" class="col-sm-2 col-form-label">Menu_ID</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="menu_id" name="menu_id" placeholder="Menu">
            </div>

            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
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