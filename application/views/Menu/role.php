<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRole">Add New Role</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($role as $r) :
          ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $r['role']; ?></td>
              <td>
                <a href="<?= base_url('menu/roleaccess/') . $r['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-universal-access"></i></a>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $r['id'] ?>"><i class="fas fa-edit"></i></button>
                <a href="<?= base_url('menu/deleterole/' . $r['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php
            $i++;
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah Role -->
<div class="modal fade" id="newRole" tabindex="-1" aria-labelledby="newRoleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url('menu/role'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
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

<!-- Modal Edit Role -->
<?php foreach ($role as $r) : ?>
  <div class="modal fade" id="edit<?= $r['id'] ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Role</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('menu/editrole/' . $r['id']) ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="role" name="role" value="<?= $r['role'] ?>">
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
<?php endforeach ?>