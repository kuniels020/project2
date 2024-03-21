<!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="produk_titipan">
          @csrf
          <div class="form-group row">
            <label for="nama_produk" class="col-sm-4 col-form-label">Nama produk</label>
            <div class="col-sm-8">
              <input type="text" class="nama_produk" id="nama_produk" name="nama_produk" placeholder="Nama_produk">
            </div>
          </div><div class="form-group row">
            <label for="nama_supplier" class="col-sm-4 col-form-label">Nama supplier</label>
            <div class="col-sm-8">
              <input type="text" class="nama_supplier" id="nama_supplier" name="nama_supplier" placeholder="Nama_supplier">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga_beli" class="col-sm-4 col-form-label">Harga Beli</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="harga_beli">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_jual" class="col-sm-4 col-form-label">Harga jual</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="harga_jual">
            </div>
          </div>
          <div class="form-group row">
            <label for="stock" class="col-sm-4 col-form-label">stock</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="stock" name="stock" placeholder="stock">
            </div>
          </div>

          <label for="keterangan" class="col-sm-4 col-form-label">keterangan</label>
            <div class="col-sm-8">
              <input type="text" class="keterangan" id="keterangan" name="keterangan" placeholder="keterangan">
            </div>
          </div>

         
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>

      </div>
      </form>
    </div>
  </div>
</div>