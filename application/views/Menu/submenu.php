<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



  <div class="row">
    <div class="col-lg">
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>
      <?= $this->session->flashdata('message'); ?>


      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubmenu">Add New Submenu</a>
      <!-- <div class="form-group">
        <form action="<?= base_url('menu/submenu_pagination'); ?>" method='POST'>
          <div class="input-group input-group-mb mb-3">
            <input type="text" class="form-control" placeholder="Search Keyword..." name='keyword' autocomplete='off' autofocus>
            <div class="input-group-append">
              <input class="btn btn-primary" type="submit" name='submit'>
            </div>
          </div>
        </form>
      </div> -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Menu</th>
            <th scope="col">Url</th>
            <th scope="col">Icon</th>
            <!-- <th scope="col">Active</th> -->
            <th scope="col">Action</th>
          </tr>
        </thead>
        <!-- <?php if (empty($submenu)) : ?>
          <tr>
            <td colspan='6'>
              <div class="alert alert-danger" role="alert">
                Data Not Found!...
              </div>
            </td>
          </tr>
        <?php endif; ?> -->
        <tbody>
          <?php
          $i = 1;
          foreach ($submenu as $sm) :
          ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $sm['title']; ?></td>
              <td><?= $sm['menu']; ?></td>
              <!-- <td><?= $sm['menu_id']; ?></td> -->
              <td><?= $sm['url']; ?></td>
              <td><?= $sm['icon']; ?></td>
              <!-- <td><?= $sm['is_active']; ?></td> -->
              <td>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $sm['id'] ?>"><i class="fas fa-edit"></i></button>
                <a href="<?= base_url('menu/deletesubmenu/' . $sm['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><i class="fas fa-trash"></i></a>
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
  <!-- <?php echo $this->pagination->create_links(); ?> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah Menu -->
<div class="modal fade" id="newSubmenu" tabindex="-1" aria-labelledby="newSubmenuLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubmenuLabel">Add New Submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url('menu/submenu'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
          </div>
          <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
              <option value="">Select Menu</option>
              <?php foreach ($menu as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
              <Label class="form-check-label" for="is_active">Active</Label>
            </div>
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
<?php foreach ($submenu as $sm) : ?>
  <div class="modal fade" id="edit<?= $sm['id'] ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('menu/editsubmenu/' . $sm['id']) ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title'] ?>">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url'] ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon'] ?>">
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