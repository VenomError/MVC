<div class="row">
  <div class="col-6">
    <div class="card ">
      <div class="card-header">
        <?php
        foreach ($data['jurusan'] as $d) {
        ?>
          <h4 class="text-center">Edit Jurusan</h4>
      </div>
      <form action="<?= BASE_PATH ?>jurusan/update" method="post" class="needs-validation" novalidate="">
        <div class="card-body row">
          <div class="form-group col-md-12">
            <label>Nama Jurusan</label>
            <input type="hidden" name="id" value="<?= $d['id_jurusan'] ?>">
            <input type="text" class="form-control" required="" placeholder="Nama Jurusan" name="nama" value="<?= $d['nama_jurusan'] ?>">
            <div class="invalid-feedback">Please Field Nama Jurusan</div>
          </div>
          <div class="form-group col-md-12">
            <button class="btn btn-icon icon-left btn-primary" name="edit" type="submit"><i class="far fa-edit"></i>Edit</button>
          </div>
        </div>
      </form>
    <?php } ?>
    </div>
  </div>
</div>