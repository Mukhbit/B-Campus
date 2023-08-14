<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <?= form_open_multipart('user/upload'); ?>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Foto</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Choose file</label>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">KTP</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="ktp" name="ktp">
        <label class="custom-file-label" for="ktp">Choose file</label>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Ijazah</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Choose file</label>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">SKCK</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="ktp" name="ktp">
        <label class="custom-file-label" for="ktp">Choose file</label>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Surat Dokter</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Choose file</label>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Surat Lisensi</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="ktp" name="ktp">
        <label class="custom-file-label" for="ktp">Choose file</label>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Sertifikate</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Choose file</label>
      </div>
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