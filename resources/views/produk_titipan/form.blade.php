<!-- Modal -->
<div class="modal fade" id="modalFormProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">tambah data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="produk_titipan">
          @csrf
          <div class="form-group row">
            <label for="nama_produk" class="col-sm-4 col-form-label">Nama karyawan</label>
            <div class="col-sm-8">
              <input type="text" class="nama_produk" id="nama_produk" name="nama_produk" placeholder="">
            </div>
          </div><div class="form-group row">
            <label for="nama_supplier" class="col-sm-4 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-8">
              <input type="date" class="nama_supplier" id="nama_supplier" name="nama_supplier" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga_beli" class="col-sm-4 col-form-label">Waktu Masuk</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" id="harga_beli" name="harga_beli" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_jual" class="col-sm-4 col-form-label">Status</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="stock" class="col-sm-4 col-form-label">waktu keluar</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" id="stock" name="stock" placeholder="">
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