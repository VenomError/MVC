<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <form class="needs-validation" novalidate="" method="post" action="<?= BASE_PATH ?>mahasiswa/store" enctype="multipart/form-data">
        <div class="card-header">
          <h4>Tambah Mahasiswa</h4>
        </div>
        <div class="card-body row">
          <div class="form-group col-md-4">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" required="" placeholder="Nama Mahasiswa" name="nama">
            <div class="invalid-feedback">Please Field Nama Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>NIM</label>
            <input type="number" class="form-control" required="" placeholder="NIM" name="nim">
            <div class="invalid-feedback">Please Field NIM Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>Password</label>
            <input type="text" class="form-control" required="" placeholder="Password" name="password">
            <div class="invalid-feedback">Please Field Password Mahasiswa</div>
          </div>
          <div class="form-group col-md-4">
            <label>TTL</label>
            <input type="text" class="form-control" required="" placeholder="TTL" name="ttl">
            <div class="invalid-feedback">Please Field Tempat Tanggal Lahir Mahasiswa</div>
          </div>
          <div class="form-group col-md-8">
            <label>Alamat</label>
            <input type="text" class="form-control" required="" placeholder="Alamat" name="alamat">
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-4">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" required="">
              <?php
              foreach ($data['jurusan'] as $d) {
              ?>
                <option value="<?= $d['id_jurusan'] ?>"><?= $d['nama_jurusan']  ?></option>
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
              ?>
                <option value="<?= $d['id_semester'] ?>"><?= $d['nama_semester']  ?></option>
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
              ?>
                <option value="<?= $d['id_kelas'] ?>"><?= $d['nama_kelas']  ?></option>
              <?php }
              ?>
            </select>
            <div class="invalid-feedback">Choose One</div>
          </div>
          <div class="form-group col-md-12">
            <label>Kelas</label>
            <label>Alamat</label>
            <input type="file" class="form-control" required="" name="avatars">
            <div class="invalid-feedback">Choose One</div>
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary" type="submit" name="create">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>