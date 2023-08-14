<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
              <th>No. Regis</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pelatihan</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No. Regis</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pelatihan</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            foreach ($sertifikate as $serti) :
            ?>
              <tr>
                <td><?= $serti['no_regis'] ?></td>
                <td><?= $serti['nama'] ?></td>
                <td><?= $serti['alamat'] ?></td>
                <td><?= $serti['pelatihan'] ?></td>
                <td><?= $serti['email'] ?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="<?= base_url('user/pdf/' . $serti['id']) ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg></a>
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