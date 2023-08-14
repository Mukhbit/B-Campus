<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content -->
  <div class="row">
    <div class="col-lg-8">
      <?= form_open_multipart('user/edit'); ?>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="no_hp" class="col-sm-2 col-form-label">No. Tlp</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $user['no_hp']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea name="alamat" id="alamat" class="form-control" rows="5"><?= $user['alamat']; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Picture</div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-8">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Edit</button>
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