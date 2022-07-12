
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('home') ?>" class="h1"><b>Kost</b>JAKARTA</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form action="<?php base_url('autentifikasi/registrasi') ?>" method="post">
                <!-- user_name -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nama Panggilan" id="user_name" 
                  name="user_name" value="<?= set_value('user_name'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <!-- nama -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Full name" id="nama" 
                  name="nama" value="<?= set_value('nama'); ?>" required>
                  <?= form_error('nama', '<small class="text-danger">','</smalll>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <!-- email -->
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email" id="email" 
                  name="email" value="<?= set_value('email') ?>" required>
                  <?= form_error('email', '<small class="text-danger">','</smalll>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <!-- password -->
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password" id="password1" 
                  name="password1" required>
                  <?= form_error('password1', '<small class="text-danger">','</smalll>'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <!-- ulang password -->
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Retype password" id="password2" 
                  name="password2" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
                </a>
            </div>
            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
    </div>
</div>