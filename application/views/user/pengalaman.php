<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/pengalaman/') . $user['id']; ?> -->
  <form action="<?= base_url('user/pengalaman/') . $user['id']; ?>" method="post">
    <h1 class="h5 mb-4 text-gray-800">Pengalaman Kerja</h1>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_perusahaan">Nama Perusahaan</label>
        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
      </div>
      <div class="col-md-6 mb-3">
        <label for="alamat_perusahaan">Alamat Perusahaan</label>
        <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan">
      </div>
      <div class="col-md-6 mb-3">
        <label for="periode_kerja">Periode kerja</label>
        <input type="text" class="form-control" id="periode_kerja" name="periode_kerja">
      </div>
    </div>
    <br>
    <h1 class="h5 mb-4 text-gray-800">Pengalaman Organisasi</h1>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_org">Nama Organisasi</label>
        <input type="text" class="form-control" id="nama_org" name="nama_org">
      </div>
      <div class="col-md-6 mb-3">
        <label for="jabatan_org">Jabatan</label>
        <input type="text" class="form-control" id="jabatan_org" name="jabatan_org">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="periode">Periode Kepesertaan</label>
        <input type="text" class="form-control" id="periode" name="periode">
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