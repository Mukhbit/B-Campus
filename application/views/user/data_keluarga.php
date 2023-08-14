<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/data_keluarga/') . $user['id']; ?> -->
  <form action="<?= base_url('user/data_keluarga/') . $user['id']; ?>" method="post">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_ibu">Nama Ibu</label>
        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_ibu">Tempat</label>
        <input type="text" class="form-control" id="tempat_ibu" name="tempat_ibu">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_lahir_ibu">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="alamat_ibu">Alamat</label>
        <textarea class="form-control" id="alamat_ibu" name="alamat_ibu" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_ibu">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_ayah">Nama Ayah</label>
        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_ayah">Tempat</label>
        <input type="text" class="form-control" id="tempat_ayah" name="tempat_ayah">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_lahir_ayah">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="alamat_ayah">Alamat</label>
        <textarea class="form-control" id="alamat_ayah" name="alamat_ayah" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_ayah">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_saudara1">Nama Saudara 1</label>
        <input type="text" class="form-control" id="nama_saudara1" name="nama_saudara1">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_saudara1">Tempat</label>
        <input type="text" class="form-control" id="tempat_saudara1" name="tempat_saudara1">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_lahir_saudara1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir_saudara1" name="tgl_lahir_saudara1">
      </div>
    </div>
    <div class="form-row">
      <!-- <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Alamat</label>
      <textarea class="form-control" id="email" name="email" cols="15" rows="5"></textarea>
    </div> -->
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_saudara1">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_saudara1" name="pekerjaan_saudara1">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_saudara2">Nama Saudara 2</label>
        <input type="text" class="form-control" id="nama_saudara2" name="nama_saudara2">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_saudara2">Tempat</label>
        <input type="text" class="form-control" id="tempat_saudara2" name="tempat_saudara2">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_saudara2">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_saudara2" name="tgl_saudara2">
      </div>
    </div>
    <div class="form-row">
      <!-- <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Alamat</label>
      <textarea class="form-control" id="email" name="email" cols="15" rows="5"></textarea>
    </div> -->
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_saudara2">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_saudara2" name="pekerjaan_saudara2">
      </div>
    </div>
    <br>
    <h1 class="h5 mb-4 text-gray-800">Isi Bila Sudah Menikah *</h1>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_pasangan">Nama Istri / Suami</label>
        <input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_pasangan">Tempat</label>
        <input type="text" class="form-control" id="tempat_pasangan" name="tempat_pasangan">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_pasangan">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_pasangan" name="tgl_pasangan">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="alamat_pasangan">Alamat</label>
        <textarea class="form-control" id="alamat_pasangan" name="alamat_pasangan" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_pasangan">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_pasangan" name="pekerjaan_pasangan">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nama_anak">Nama Anak 1</label>
        <input type="text" class="form-control" id="nama_anak" name="nama_anak">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tempat_anak">Tempat</label>
        <input type="text" class="form-control" id="tempat_anak" name="tempat_anak">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_anak">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_anak" name="tgl_anak">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="no_tlp_anak">No. Telfon</label>
        <input type="text" class="form-control" id="no_tlp_anak" name="no_tlp_anak">
      </div>
      <div class="col-md-6 mb-3">
        <label for="pekerjaan_anak">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan_anak" name="pekerjaan_anak">
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