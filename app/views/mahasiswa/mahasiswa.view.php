<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="mr-4">Tabel Mahasiswa</h4>
        <a href="<?= BASE_PATH ?>mahasiswa/create" class="btn btn-icon icon-left btn-primary  "><i class="far fa-edit"></i> Create</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-2">
            <thead>
              <tr>
                <th>
                  NO
                </th>
                <th>NIM</th>
                <th>Avatars</th>
                <th>Alamat</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Kelas</th>
                <th>TTL</th>
                <th>Assign</th>
              </tr>
            </thead>
            <tbody>
              <form action="<?= BASE_PATH ?>mahasiswa/action" method="post">
                <?php
                $no = 1;
                foreach ($data['mahasiswa'] as $d) {
                ?>
                  <input type="hidden" name="id" value="<?= $d['id_mahasiswa'] ?>">
                  <tr>
                    <td>
                      <?= $no++  ?>
                    </td>
                    <td><?= $d['nim'] ?></a></td>
                    <td>
                      <img alt="image" src="<?= BASE_ASSETS ?>/assets/avatars/<?= $d['avatars'] ?>" class="rounded-circle" width="35" data-toggle="tooltip" title="<?= $d['nama_mahasiswa'] ?>">
                    </td>
                    <td><?= $d['alamat'] ?></td>
                    <td><?= $d['nama_mahasiswa'] ?></a></td>
                    <td><?= $d['nama_jurusan'] ?></a></td>
                    <td><?= $d['nama_semester'] ?></a></td>
                    <td>
                      <?= $d['nama_kelas'] ?>
                    </td>
                    <td><?= $d['ttl'] ?>
                    </td>
                    <td>
                      <div class="dropdown d-inline mr-2  ">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item btn btn-primary rounded text-light mb-2" href="<?= BASE_PATH ?>mahasiswa/detail/<?= $d['id_mahasiswa'] ?>" name="detail" data-toggle="tooltip" title="<?= $d['nama_mahasiswa'] ?>">Detail</a>
                          <a class="dropdown-item btn btn-warning rounded text-light mb-2" href="<?= BASE_PATH ?>mahasiswa/edit/<?= $d['id_mahasiswa'] ?>" name=" edit" data-toggle="tooltip" title="<?= $d['nama_mahasiswa'] ?>">Edit</a>
                          <a class="dropdown-item btn btn-danger rounded text-light " href="<?= BASE_PATH ?>mahasiswa/delete/<?= $d['id_mahasiswa'] ?>" name=" Hapus" data-toggle="tooltip" title="<?= $d['nama_mahasiswa'] ?>">Hapus</a>
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
</div>