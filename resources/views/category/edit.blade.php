<!-- Modal -->

<div class="modal fade" id="#modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" class="form-edit">
          @csrf
          @method('GET')
        
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Category</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_edit" name="nama" placeholder="Nama Category">
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