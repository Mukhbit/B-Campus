<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/data_sekolah'); ?> -->
  <form action="<?= base_url('user/data_sekolah/') . $user['id']; ?>" method="post">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_sd">Nama Sekolah SD</label>
        <input type="text" class="form-control" id="nama_sd" name="nama_sd">
      </div>
      <div class="col-md-6 mb-3">
        <label for="alamat_sd">Alamat Sekolah SD</label>
        <textarea class="form-control" id="alamat_sd" name="alamat_sd" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="lulus_sd">Tahun Lulus SD</label>
        <input type="text" class="form-control" id="lulus_sd" name="lulus_sd">
      </div>
      <div class="col-md-6 mb-3">
        <label for="kepsek_sd">Nama Kepala Sekolah</label>
        <input type="text" class="form-control" id="kepsek_sd" name="kepsek_sd">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_smp">Nama Sekolah SMP</label>
        <input type="text" class="form-control" id="nama_smp" name="nama_smp">
      </div>
      <div class="col-md-6 mb-3">
        <label for="alamat_smp">Alamat Sekolah SMP</label>
        <textarea class="form-control" id="alamat_smp" name="alamat_smp" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="lulus_smp">Tahun Lulus SMP</label>
        <input type="text" class="form-control" id="lulus_smp" name="lulus_smp">
      </div>
      <div class="col-md-6 mb-3">
        <label for="kepsek_smp">Nama Kepala Sekolah SMP</label>
        <input type="text" class="form-control" id="kepsek_smp" name="kepsek_smp">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_sma">Nama Sekolah SMA</label>
        <input type="text" class="form-control" id="nama_sma" name="nama_sma">
      </div>
      <div class="col-md-6 mb-3">
        <label for="alamat_sma">Alamat Sekolah SMA</label>
        <textarea class="form-control" id="alamat_sma" name="alamat_sma" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="lulus_sma">Tahun Lulus SMA</label>
        <input type="text" class="form-control" id="lulus_sma" name="lulus_sma">
      </div>
      <div class="col-md-6 mb-3">
        <label for="kepsek_sma">Nama Kepala Sekolah SMA</label>
        <input type="text" class="form-control" id="kepsek_sma" name="kepsek_sma">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_univ">Nama Universitas</label>
        <input type="text" class="form-control" id="nama_univ" name="nama_univ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="alamat_univ">Alamat Universitas</label>
        <textarea class="form-control" id="alamat_univ" name="alamat_univ" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan">
      </div>
      <div class="col-md-6 mb-3">
        <label for="lulus_univ">Tahun Lulus</label>
        <input type="text" class="form-control" id="lulus_univ" name="lulus_univ">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_rektor">Nama Rektor</label>
        <input type="text" class="form-control" id="nama_rektor" name="nama_rektor">
      </div>
    </div>
    <div class="col-sm">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <!-- Content end -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->