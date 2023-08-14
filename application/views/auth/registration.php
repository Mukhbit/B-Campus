<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php
                function getRomawi($bln)
                {
                  switch ($bln) {
                    case 1:
                      return "I";
                      break;
                    case 2:
                      return "II";
                      break;
                    case 3:
                      return "III";
                      break;
                    case 4:
                      return "IV";
                      break;
                    case 5:
                      return "V";
                      break;
                    case 6:
                      return "VI";
                      break;
                    case 7:
                      return "VII";
                      break;
                    case 8:
                      return "VIII";
                      break;
                    case 9:
                      return "IX";
                      break;
                    case 10:
                      return "X";
                      break;
                    case 11:
                      return "XI";
                      break;
                    case 12:
                      return "XII";
                      break;
                  }
                }
                $db =  $this->db->query("SELECT MAX(no_bat) as no_bat FROM user")->row_array();
                $nomor = $db['no_bat'];
                $nomor++;
                $nomor_t = sprintf("%03s", $nomor);;
                $bulan = date('n');
                $romawi = getRomawi($bulan);
                $tahun = date('Y');
                ?>
                <input type="hidden" name="no_regis" value="<?= $nomor_t . '/BAT/REG/' . $romawi . '/' . $tahun ?>">
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Actived Phone Number..." value="<?= set_value('no_hp'); ?>">
                  <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user" id="nik" name="nik" placeholder="Number KTP" value="<?= set_value('nik'); ?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group">
                <textarea name="alamat" id="alamat" class="form-control form-control-user" placeholder="Current Residence Address..."></textarea>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipe" id="tipe1" value="1" checked>
                    <label class="form-check-label" for="tipe1">
                      Individual
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipe" id="tipe2" value="2" onclick='ShowHideDiv2();' onclick="showMe('div1')">
                    <label class="form-check-label" for=" tipe2">
                      Company
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <input class="form-control form-control-user" style="display:none" name='name_company' id='name_company' placeholder="Please, Write Your Company Name..."></input>
                </div>
              </div>
              <script>
                function ShowHideDiv() {
                  var alasanYes = document.getElementById("tipe2");
                  var alasantext = document.getElementById("name_company");
                  alasantext.style.display = alasanYes.checked ? "block" : "none";
                }

                function ShowHideDiv2() {
                  var alasanYes = document.getElementById("tipe2");
                  var alasantext = document.getElementById("name_company");
                  alasantext.style.display = alasanYes.checked ? "block" : "none";
                }
              </script>
              <!-- <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <select name="program" class="custom-select form-control" id="program">
                    <option selected disabled>Program Pelatihan</option>
                    <?php foreach ($program_pelatihan as $program) { ?>
                      <option value="<?php echo $program['uid']; ?>"><?php echo $program['nama_program']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <select name="sub_program" class="custom-select form-control" id="sub_program">
                    <option selected disabled>Sub Program Pelatihan</option>
                    <?php foreach ($sub_program_pelatihan as $sub_program) { ?>
                      <option value="<?php echo $sub_program['uid']; ?>"><?php echo $sub_program['nama_sub_program']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div> -->
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>