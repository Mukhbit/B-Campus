<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg">
      <?= form_error('histori_program', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newBatch">Add New Batch</a>
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
                  <th>Program</th>
                  <th>Sub Program</th>
                  <th>Batch</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Program</th>
                  <th>Sub Program</th>
                  <th>Batch</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                foreach ($histori_program as $h_pro) :
                ?>
                  <tr>
                    <td><?= $h_pro['program']; ?></td>
                    <td><?= $h_pro['sub_program']; ?></td>
                    <td><?= $h_pro['batch']; ?></td>
                    <td>
                      <?php
                      if ($h_pro['status'] == '1') {
                        echo "Active";
                      } else {
                        echo "Not Active";
                      }
                      ?>
                    </td>
                    <td>
                      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $h_pro['id'] ?>"><i class="fas fa-edit"></i></button>
                      <a href="<?= base_url('evaluation/deleteprogram/' . $h_pro['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menonaktifkan Program ini ?')"><i class="fab fa-creative-commons-pd"></i></a>
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
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah Batch -->
<div class="modal fade" id="newBatch" tabindex="-1" aria-labelledby="newBatchLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newBatchLabel">Add New Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url('evaluation/program'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <select name="program" id="program" class="form-control">
              <option value="">Select Program</option>
              <?php
              $query_program = "SELECT id,nama_program FROM program_pelatihan WHERE status_program ='1'";
              $query = $this->db->query($query_program);
              if ($query->num_rows() > 0) :
                foreach ($query->result() as $row) : ?>
                  <option value="<?= $row->nama_program; ?>"><?= $row->nama_program; ?></option>
              <?php
                endforeach;
              endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="sub_program" id="sub_program" class="form-control">
              <option value="">Select Sub Program</option>
              <?php
              $query_program = "SELECT id,nama_sub_program FROM sub_program_pelatihan WHERE status_program ='1'";
              $query = $this->db->query($query_program);
              if ($query->num_rows() > 0) :
                foreach ($query->result() as $row) : ?>
                  <option value="<?= $row->nama_sub_program; ?>"><?= $row->nama_sub_program; ?></option>
              <?php
                endforeach;
              endif; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="batch" name="batch" placeholder="Batch Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="periode" name="periode" placeholder="Periode Pelatihan ( 10 Januari s/d 10 Februari )" required>
          </div>
          <div class="form-group">
            <select name="status" id="status" class="form-control">
              <option value="1">Active</option>
              <option value="2">Not Active</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Batch -->
<!-- <?php foreach ($histori_program as $h_pro) : ?> -->
<div class="modal fade" id="edit<?= $h_pro['id'] ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">Edit Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('evaluation/editprogram/' . $h_pro['id']) ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <select name="program" id="program" class="form-control">
              <option value="">Select Program</option>
              <?php
              $query_program = "SELECT id,nama_program FROM program_pelatihan WHERE status_program ='1'";
              $query = $this->db->query($query_program);
              if ($query->num_rows() > 0) :
                foreach ($query->result() as $row) : ?>
                  <option value="<?= $row->nama_program; ?>"><?= $row->nama_program; ?></option>
              <?php
                endforeach;
              endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="sub_program" id="sub_program" class="form-control">
              <option value="">Select Sub Program</option>
              <?php
              $query_program = "SELECT id,nama_sub_program FROM sub_program_pelatihan WHERE status_program ='1'";
              $query = $this->db->query($query_program);
              if ($query->num_rows() > 0) :
                foreach ($query->result() as $row) : ?>
                  <option value="<?= $row->nama_sub_program; ?>"><?= $row->nama_sub_program; ?></option>
              <?php
                endforeach;
              endif; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="batch" name="batch" value="<?= $h_pro['batch'] ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="periode" name="periode" value="<?= $h_pro['periode_program'] ?>">
          </div>
          <div class="form-group">
            <select name="status" id="status" class="form-control">
              <option value="1">Active</option>
              <option value="2">Not Active</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- <?php endforeach ?> -->