<div class="row">
  <div class="col-9">
    <div class="card">
      <div class="card-header">
        <h4 class="mr-4">Tabel Jurusan</h4>
        <!-- <a href="<?= BASE_PATH ?>jurusan/create" class="btn btn-icon icon-left btn-primary  "><i class="far fa-edit"></i> Create</a> -->
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-2">
            <thead>
              <tr>
                <th>Nama Jurusan</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Assign</th>
              </tr>
            </thead>
            <tbody>
              <form action="<?= BASE_PATH ?>mahasiswa/action" method="post">
                <?php
                $no = 1;
                foreach ($data['jurusan'] as $d) {
                  $id = $d['id_jurusan'];
                  $jur = new Model();
                  $jur->table('mahasiswa');
                  $count =  $jur->select()->where(['jurusan' => $id])->count();

                ?>
                  <input type="hidden" name="id" value="<?= $d['id_jurusan'] ?>">

                  <tr>
                    <td><?= $d['nama_jurusan'] ?></a></td>
                    <td class="text-center"><?= $count ?></a></td>
                    <td class="text-center">
                      <div class="dropdown d-inline mr-2  ">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item btn btn-primary rounded text-light mb-2" href="<?= BASE_PATH ?>jurusan/detail/<?= $d['id_jurusan'] ?>" name="detail" data-toggle="tooltip" title="<?= $d['nama_jurusan'] ?>">Detail</a>
                          <a class="dropdown-item btn btn-warning rounded text-light mb-2" href="<?= BASE_PATH ?>jurusan/edit/<?= $d['id_jurusan'] ?>" name=" edit" data-toggle="tooltip" title="<?= $d['nama_jurusan'] ?>">Edit</a>
                          <a class="dropdown-item btn btn-danger rounded text-light " href="<?= BASE_PATH ?>jurusan/delete/<?= $d['id_jurusan'] ?>" name=" Hapus" data-toggle="tooltip" title="<?= $d['nama_jurusan'] ?>">Hapus</a>
                        </div>
                      </div>
                    </td>

                  </tr>
                <?php } ?>
              </form>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card ">
      <div class="card-header">
        <h4 class="text-center">Tambah Jurusan</h4>
      </div>
      <form action="<?= BASE_PATH ?>jurusan/store" method="post" class="needs-validation" novalidate="">
        <div class="card-body row">
          <div class="form-group col-md-12">
            <label>Nama Jurusan</label>
            <input type="text" class="form-control" required="" placeholder="Nama Jurusan" name="nama">
            <div class="invalid-feedback">Please Field Nama Jurusan</div>
          </div>
          <div class="form-group col-md-12">
            <button class="btn btn-icon icon-left btn-primary" name="create" type="submit"><i class="far fa-edit"></i>Create</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>