<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenu">Add New Menu</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Menu</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($menu as $m) :
          ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $m['menu']; ?></td>
              <td>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $m['id'] ?>"><i class="fas fa-edit"></i></button>
                <a href="<?= base_url('menu/delete/' . $m['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><i class="fas fa-trash"></i></a>
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

<!-- Modal Tambah Menu -->
<div class="modal fade" id="newMenu" tabindex="-1" aria-labelledby="newMenuLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url('menu'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
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

<!-- Modal Edit Menu -->
<?php foreach ($menu as $m) : ?>
  <div class="modal fade" id="edit<?= $m['id'] ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('menu/edit/' . $m['id']) ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="menu" name="menu" value="<?= $m['menu'] ?>">
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