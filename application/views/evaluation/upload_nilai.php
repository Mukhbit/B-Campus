<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content -->
  <div class="row">
    <div class="col-lg">
      <!-- <?= form_open_multipart('evaluation/upload_nilai/' . $sertifikate['id']); ?> -->
      <form action="<?= base_url('evaluation/upload_nilai/' . $sertifikate['id']); ?>" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="materi1">Materi 1 Pelajaran</label>
            <input type="text" class="form-control" id="materi1" name="materi1"><?= form_error('materi1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="jam1">Lama Jam Ajar</label>
            <input type="number" class="form-control" id="jam1" name="jam1"><?= form_error('jam1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="materi2">Materi 2 Pelajaran</label>
            <input type="text" class="form-control" id="materi2" name="materi2"><?= form_error('materi2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="jam2">Lama Jam Ajar</label>
            <input type="number" class="form-control" id="jam2" name="jam2"><?= form_error('jam2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="materi3">Materi 3 Pelajaran</label>
            <input type="text" class="form-control" id="materi3" name="materi3"><?= form_error('materi3', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="jam3">Lama Jam Ajar</label>
            <input type="number" class="form-control" id="jam3" name="jam3"><?= form_error('jam3', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="materi4">Materi 4 Pelajaran</label>
            <input type="text" class="form-control" id="materi4" name="materi4"><?= form_error('materi4', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="jam4">Lama Jam Ajar</label>
            <input type="number" class="form-control" id="jam4" name="jam4"><?= form_error('jam4', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nilai_teori">Nilai Teori</label>
            <input type="number" class="form-control" id="nilai_teori" name="nilai_teori"><?= form_error('nilai_teori', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="nilai_praktek">Nilai Praktek</label>
            <input type="number" class="form-control" id="nilai_praktek" name="nilai_praktek"><?= form_error('nilai_praktek', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->