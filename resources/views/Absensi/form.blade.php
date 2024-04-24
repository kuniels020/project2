<div class="modal fade" id="modalFormAbsensi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="Absensi  ">
          <div id="method"></div>
          @csrf
          <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama kayawan</label>
            <div class="col-sm-8">
              <input type="text" class="nama" id="Namakaryawan" name="Namakaryawan" placeholder="Namakaryawan">
            </div>
          </div>

          <div class="form-group row">
            <label for="date" class="col-sm-4 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk" placeholder="tanggal">
            </div>
          </div>

          <div class="form-group row">
            <label for="time" class="col-sm-4 col-form-label">waktu mulai</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" id="waktuMasuk" name="waktuMasuk" >
            </div>
          </div>

          <div class="form-group row">
            <label for="stutus" class="col-sm-4 col-form-label">status</label>
            <select name="status" id="status">
              <option value="hadir">HADIR </option>
              <option value="sakit">SAKIT </option>
              <option value="izin">IZIN </option>
         </select>  
       
         <div class="form-group row">
            <label for="date" class="col-sm-4 col-form-label">Waktu selesai Kerja</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" id="waktKeluar" name="waktKeluar" placeholder="waktKeluar">
            </div>
          </div>
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