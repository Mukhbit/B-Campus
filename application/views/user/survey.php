<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- Content form -->
  <!-- <?= form_open('user/daftar'); ?> -->
  <form action="<?= base_url('user/survey/') . $user['id']; ?>" method="post">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="bat">Darimana anda mengetaui BAT ?</label>
        <textarea class="form-control" id="bat" name="bat" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="pelatihan_bat">Mengapa anda memilih BAT sebagai tempat pelatihan ?</label>
        <textarea class="form-control" id="pelatihan_bat" name="pelatihan_bat" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="pihak_lain">Apakah pilihan sendiri atau dipaksa pihak lain ?</label>
        <textarea class="form-control" id="pihak_lain" name="pihak_lain" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="saudara">Apakah ada saudara / teman yang mengikuti pendidikan di BAT ? Sebutkan !</label>
        <textarea class="form-control" id="saudara" name="saudara" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="keluarga">Apakah memiliki keluarga yang bekerja di aviasi ? Bila ada, dimana ?</label>
        <textarea class="form-control" id="keluarga" name="keluarga" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="peraturan">Apakah bersedia mentaati peraturan di BAT ?</label>
        <textarea class="form-control" id="peraturan" name="peraturan" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="penyakit">Apakah memiliki penyakit serius ? sebutkan !</label>
        <textarea class="form-control" id="penyakit" name="penyakit" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="aviasi">Apa motivasi mengikuti pendidikan aviasi di BAT ?</label>
        <textarea class="form-control" id="aviasi" name="aviasi" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nasinal">Menurut anda, bagaimana menjaga nasionalisme masing-masing individu ?</label>
        <textarea class="form-control" id="nasinal" name="nasinal" cols="15" rows="5"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label for="negara">Menurut anda, apakah keamanan penerbangan berperan pada pertahanan negara ?</label>
        <textarea class="form-control" id="negara" name="negara" cols="15" rows="5"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="link">Sebutkan akun facebook anda?</label>
        <input type="text" class="form-control" id="link" name="link">
      </div>
      <div class="col-md-6 mb-3">
        <label for="link2">Sebutkan akun Instagram / Twiter anda?</label>
        <input type="text" class="form-control" id="link2" name="link2">
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