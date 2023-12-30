<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <form class="needs-validation" novalidate="" method="post" action="<?= BASE_PATH ?>mahasiswa/update" enctype="multipart/form-data">
        <div class="card-header">
          <h4>Edit Mahasiswa</h4>
        </div>
        <div class="card-body row">
          <div class="form-group col-md-12">
            <div class="card-body text-center">
              <div class="chocolat-parent">
                <a href="<?= BASE_ASSETS ?>assets/avatars/<?= $data['mahasiswa']['avatars'] ?>" class="chocolat-image" title="<?= $data['mahasiswa']['nama_mahasiswa'] ?>">
                  <div data-crop-image="200">
                    <img width="200px" alt="image" src="<?= BASE_ASSETS ?>assets/avatars/<?= $data['mahasiswa']['avatars'] ?>" class="img-fluid rounded-circle float-center">
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label>Nama Mahasiswa</label>
            <input type="hidden" class="form-control" required="" placeholder="Nama Mahasiswa" name="avatarsOld" value="<?= $data['mahasiswa']['avatars'] ?>">
            <input type="hidden" class="form-control" required="" placeholder="Nama Mahasiswa" name="id" value="<?= $data['mahasiswa']['id_mahasiswa'] ?>">
            <input type="text" class="form-control" required="" placeholder="Nama Mahasiswa" name="nama" value="<?= $data['mahasiswa']['nama_mahasiswa'] ?>">
            <div class="invalid-feedback">Please Field Nama Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>NIM</label>
            <input type="number" class="form-control" required="" placeholder="NIM" name="nim" value="<?= $data['mahasiswa']['nim'] ?>">
            <div class="invalid-feedback">Please Field NIM Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>Password</label>
            <input type="text" class="form-control" required="" placeholder="Password" name="password" value="<?= $data['mahasiswa']['password'] ?>">
            <div class="invalid-feedback">Please Field Password Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>TTL</label>
            <input type="text" class="form-control" required="" placeholder="TTL" name="ttl" value="<?= $data['mahasiswa']['ttl'] ?>">
            <div class="invalid-feedback">Please Field Tempat Tanggal Lahir Mahasiswa</div>
          </div>
          <div class="form-group col-md-8">
            <label>Alamat</label>
            <input type="text" class="form-control" required="" placeholder="Alamat" name="alamat" value="<?= $data['mahasiswa']['alamat'] ?>">
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-4">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" required="">
              <?php
              foreach ($data['jurusan'] as $d) {
                if ($d['id_jurusan'] == $data['mahasiswa']['jurusan']) {
                  $selected = 'selected';
                } else
                  $selected = '';
              ?>
                <option <?= $selected ?> value="<?= $d['id_jurusan'] ?>"><?= $d['nama_jurusan']  ?></option>
              <?php }
              ?>
            </select>
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-4">
            <label>Semester</label>
            <select class="form-control" name="semester" required="">
              <?php
              foreach ($data['semester'] as $d) {
                if ($d['id_semester'] == $data['mahasiswa']['semester']) {
                  $selected = 'selected';
                }
                $selected = '';

              ?>
                <option <?= $selected ?> value="<?= $d['id_semester'] ?>"><?= $d['nama_semester']  ?></option>
              <?php }
              ?>
            </select>
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-4">
            <label>Kelas</label>
            <select class="form-control" name="kelas" required="">
              <?php
              foreach ($data['kelas'] as $d) {
                if ($d['id_kelas'] == $data['mahasiswa']['kelas']) {
                  $selected = 'selected';
                } else {
                  $selected = '';
                }
              ?>
                <option <?= $selected ?> value="<?= $d['id_kelas'] ?>"><?= $d['nama_kelas']  ?></option>
              <?php }
              ?>
            </select>
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-12">
            <label>Avatar</label>
            <input type="file" class="form-control" name="avatars">
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary" type="submit" name="edit">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>