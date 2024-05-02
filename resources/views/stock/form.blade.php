<!-- Modal
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags, CSS links, etc. -->
  </head>
<body>

<!-- Modal -->
<div class="modal fade" id="modalfromstock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">STOCK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="modalForm" method="post" action="STOCK">
          @csrf
          <div id="method"></div>
          <select name="menu_id" id="menu_id" class="form-control">
    <option value="">Pilih menu</option>
    @foreach($menu as $m)
        <option value="{{ $m->id }}">{{ $m->nama }}</option>
    @endforeach
    </select>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Jumlah</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>


