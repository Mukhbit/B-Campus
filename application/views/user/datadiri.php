<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/input_datadiri'); ?> -->
  <form action="<?= base_url('user/datadiri/') . $user['id']; ?>" method="post">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="batch">Batch</label>
        <input type="text" class="form-control" id="batch" name="batch">
      </div>
      <div class="col-md-6 mb-3">
        <label for="tgl_start">Tanggal Mulai Pelatihan</label>
        <input type="date" class="form-control" id="tgl_start" name="tgl_start">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="tempat">Tempat</label>
        <input type="text" class="form-control" id="tempat" name="tempat">
      </div>
      <div class="col-md-3 mb-3">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
      </div>
      <div class="col-md-6 mb-3">
        <label for="agama">Agama</label>
        <select class="form-control" id="agama" name="agama">
          <option value="islam">Islam</option>
          <option value="kristen_protestan">Kristen Protestan</option>
          <option value="kristen_khatolik">Kristen Khatolik</option>
          <option value="budha">budha</option>
          <option value="hindu">Hindu</option>
          <option value="konghucu">Konghucu</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip01">Status</label>
        <!-- <input type="text" class="form-control" id="email" name="email"> -->
        <select class="form-control" id="status" name="status">
          <option value="lajang">Lajang</option>
          <option value="menikah">Menikah</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Jenis Kelamin</label>
        <!-- <input type="text" class="form-control" id="email" name="email"> -->
        <select class="form-control" id="jenkel" name="jenkel">
          <option value="pria">Pria</option>
          <option value="wanita">Wanita</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip01">Alamat KTP</label>
        <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Alamat Domisili</label>
        <textarea class="form-control" id="alamat_domisili" name="alamat_domisili" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip01">Tinggi Badan</label>
        <input type="number" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Berat Badan</label>
        <input type="number" class="form-control" id="berat_bdn" name="berat_bdn">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip01">Warna Kulit</label>
        <!-- <input type="text" class="form-control" id="warna_kulit" name="warna_kulit"> -->
        <select class="form-control" id="warna_kulit" name="warna_kulit">
          <option value="kuning">Kuning</option>
          <option value="coklat">Coklat</option>
          <option value="gelap">Gelap</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Bentuk Wajah</label>
        <!-- <input type="text" class="form-control" id="bentuk_wajh" name="bentuk_wajh"> -->
        <select class="form-control" id="bentuk_wajh" name="bentuk_wajh">
          <option value="bulat">Bulat</option>
          <option value="oval">Oval</option>
          <option value="panjang">Panjang</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip01">Jenis Rambut</label>
        <!-- <input type="text" class="form-control" id="jenis_rambut" name="jenis_rambut"> -->
        <select class="form-control" id="jenis_rambut" name="jenis_rambut">
          <option value="lurus">Lurus</option>
          <option value="ikal">Ikal</option>
          <option value="kriting">Kriting</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Warna Rambut</label>
        <!-- <input type="text" class="form-control" id="warna_rambut" name="warna_rambut"> -->
        <select class="form-control" id="warna_rambut" name="warna_rambut">
          <option value="hitam">Hitam</option>
          <option value="pirang">Pirang</option>
          <option value="coklat">Coklat</option>
        </select>
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