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
        <form method="POST" action="meja" class="form-edit">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="nomor_meja" class="col-sm-2 col-form-label">No Meja</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nomor_meja" name="nomor_meja" placeholder="N0 Meja">
            </div>
          </div>
          <div class="form-group row">
            <label for="kapasitas" class="col-sm-2 col-form-label">kapasitas</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas">
            </div>
          </div>
          <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="status" name="status" placeholder="status">
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