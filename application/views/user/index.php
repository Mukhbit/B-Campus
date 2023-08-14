<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-8">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

  <!-- style="max-width: 540px;" -->
  <div class="card mb-3 col-lg-8">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['nama']; ?></h5>
          <p class="card-text">Email : <?= $user['email']; ?><br>No. Register : <?= $user['no_registrasi']; ?><br>No. Hp : <?= $user['no_hp']; ?><br>Alamat : <?= $user['alamat']; ?></p>
          <p class="card-text"><small class="text-muted">Member Since, <?= date('d F Y', $user['date_created']); ?></small></p>
        </div>
      </div>
    </div>
    <br>
    <div class="list-group">
      <?php
      $query = $this->db->query("SELECT foto_ktp FROM user WHERE email = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query['foto_ktp'] == '' or $query['foto_ktp'] == null) { ?>
        <a href="<?= base_url('user/upload_data/') . $user['id']; ?>" class="list-group-item list-group-item-action">Upload File</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Upload File <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM data_diri WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/datadiri/') . $user['id']; ?>" class="list-group-item list-group-item-action">Data Diri</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Data Diri <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM data_keluarga WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/data_keluarga/') . $user['id']; ?>" class="list-group-item list-group-item-action">Data Keluarga</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Data Keluarga <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM jenjang_pendidikan WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/data_sekolah/') . $user['id']; ?>" class="list-group-item list-group-item-action">Data Sekolah</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Data Sekolah <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM pengalaman_kerja WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/pengalaman/') . $user['id']; ?>" class="list-group-item list-group-item-action">Pengalaman Kerja / Organisasi</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Pengalaman Kerja / Organisasi <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM survei WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/emergency_number/') . $user['id']; ?>" class="list-group-item list-group-item-action">Emergency Number</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Emergency Number <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>

      <?php
      $query = $this->db->query("SELECT email_id FROM survei WHERE email_id = '$user[email]'")->row_array();
      // var_dump($query);
      // echo $query;
      // die;
      ?>

      <?php if ($query == '') { ?>
        <a href="<?= base_url('user/survey/') . $user['id']; ?>" class="list-group-item list-group-item-action">Survey</a>
      <?php } else { ?>
        <a href="" class="list-group-item list-group-item-action list-group-item-primary">Survey <i class="fas fa-fw fa-check"></i></a>
      <?php } ?>
    </div>
    <br>
  </div>

  <!-- List Data -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Sertifikate</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Batch</th>
              <th>Program</th>
              <th>Sub Program</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Batch</th>
              <th>Program</th>
              <th>Sub Program</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            foreach ($batch as $bat) :
            ?>
              <tr>
                <td><?= $bat['batch'] ?></td>
                <td><?= $bat['program'] ?></td>
                <td><?= $bat['sub_program'] ?> - <?= $bat['id'] ?></td>
                <!-- <?= $sertifikat[0]['batch_id'] ?> -->
                <td>
                  <?php
                  $query = $this->db->query("SELECT batch_id FROM sertifikate WHERE email = '$user[email]' AND batch_id = '$bat[id]'")->row_array();
                  // var_dump($query);
                  // echo $query;
                  // die;
                  ?>

                  <?php if ($query == null) { ?>
                    <a href="<?= base_url('user/daftar/') . $bat['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"> Daftar </i></a>
                  <?php } else { ?>
                    <a href="" class="btn btn-danger btn-sm">Sudah Terdaftar</a>
                  <?php } ?>
                </td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- DataTales Example End -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->