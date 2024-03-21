<div class="modal fade" id="modalFormmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Meja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="menu">
          <div id="method"></div>
          @csrf
          <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
              <input type="text" class="nama" id="nama" name="nama" placeholder="Nama menu">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga" class="col-sm-4 col-form-label">Harga</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="harga" name="harga" placeholder="harga">
            </div>
          </div>

          <div class="form-group row">
            <label for="image" class="col-sm-4 col-form-label">IMage</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="image" name="image" placeholder="image">
            </div>
          </div>

          <div class="form-group row">
            <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi">
            </div>
            <div class="form-group row">
            <label>jenis</label>
            <select name="jenis_id" id="jenis_id">
              <option value="">pilih jenis</option>
            @foreach($jenis as $p)
              <option value="{{$p->id}}">{{$p->nama_jenis}}</option>
               @endforeach
            </select>          
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>