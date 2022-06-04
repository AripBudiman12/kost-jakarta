  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="assets/img/bg.jpg" alt="AdminLTELogo" height="60" width="60">
    <h3>Kost-Jakarta</h3>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Admin'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <!-- Sidebar user panel (optional) -->
            <ul class="image">
              <li style="list-style:none;"><span href="#" class="d-block-link active"><?= $user['user_name'] ?></span>
              <img src="<?= base_url('assets/img/user'); ?>" class="brand-image img-circle elevation-3" width="60" height="35"></li>
            </ul>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg">
          <!-- User Image -->
          <center>
          <li class="user-header">
            <img src="<?= base_url('assets/img/user'); ?>" class="img circle" alt="User Image">
            <p>
            <?= $user['nama'] ?> - Admin Kost <br>
              <small>Member since Mei. 2022</small>
            </p>
          </li>
          </center>
          <br>
          <!-- Menu Footer -->
          <li class="user-footer">
              <a style="align: left;" href="<?= base_url('User/ubahProfil') ?>" class="btn btn-info btn-flat">Profil</a>
              <a style="float: right;" href="<?= base_url('Autentifikasi/logout') ?>" class="btn btn-info btn-flat">Log-Out</a>             
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
   </ul>
  </nav>
  <!-- /.navbar -->
