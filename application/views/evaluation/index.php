<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-md-5">
      <form action="<?= base_url('evaluation') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autocomplete="off" autofocus>
          <div class="input-group-append">
            <input class="btn btn-primary" type="submit" name="submit">
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg">
      <?= form_error('histori_program', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <h1 class="h6 mb-4 text-gray-800">Result = <?= $total_rows; ?></h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Program</th>
            <th>Batch</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($sertifikate)) : ?>
            <tr>
              <td colspan="5">
                <div class="alert alert-danger" role="alert">
                  Data Not Found !
                </div>
              </td>
            </tr>
          <?php endif; ?>
          <?php
          // $i = 1;
          foreach ($sertifikate as $serti) :
          ?>
            <tr>
              <td><?= ++$start; ?></td>
              <td><?= $serti['nama']; ?></td>
              <td><?= $serti['email']; ?></td>
              <td><?= $serti['pelatihan']; ?></td>
              <td>
                <?= $serti['batch_id']; ?>
              </td>
              <td>
                <a href="<?= base_url('evaluation/upload_nilai/' . $serti['id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-university"></i></a>
              </td>
            </tr>
          <?php
          // $i++;
          endforeach;
          ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->