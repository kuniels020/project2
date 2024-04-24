<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags, CSS links, etc. -->
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="modalFormcategegori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="modalForm" method="post" action="category">
          @csrf
          <div id="method"></div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nama Category</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama">
            </div> <!-- Close the div with class col-sm-8 -->
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
