<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/daftar'); ?> -->
  <form action="<?= base_url('user/emergency_number/') . $user['id']; ?>" method="post">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat">Tempat</label>
        <input type="text" class="form-control" id="tempat" name="tempat">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="no_hp">No. Hp</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="hubungan">Hubungan</label>
        <input type="text" class="form-control" id="hubungan" name="hubungan">
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