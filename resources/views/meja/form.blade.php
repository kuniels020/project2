<!-- Modal -->
<div class="modal fade" id="modalFormMeja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MEJA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="meja">
          @csrf
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">No Meja</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ModalFormMeja" name="nomor_meja">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kapasitas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ModalFormMeja" name="kapasitas">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">status</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ModalFormMeja" name="status">
            </div>
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