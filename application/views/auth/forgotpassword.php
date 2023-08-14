<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Forgot Password</h1>
            </div>
            <h5>Untuk melakukan reset password, silakan masukkan alamat email anda. </h5>
            <?php echo form_open('forgot_password'); ?>
            <h6>Email:</h6>
            <p>
              <!-- <input type="text" name="email" value="<?php echo set_value('email'); ?>" /> -->
              <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
            </p>
            <p> <?php echo form_error('email'); ?> </p>
            <!-- <p>
              <input type="submit" name="btnSubmit" value="Submit" />
            </p> -->
            <button type="submit" name="btnSubmit" value="Submit" class="btn btn-primary btn-user btn-block">
              Submit
            </button>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
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