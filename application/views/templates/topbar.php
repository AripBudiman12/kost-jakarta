  <!-- Top Bar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Home'); ?>" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <ul class="image">
              <li style="list-style:none;"><span href="#" class="d-block-link active"><?= $user['user_name'] ?></span>
              <img src="<?= base_url ('assets/img/user/') . $user['image']; ?>" class="brand-image elevation-3" width="60" height="35"></li>
            </ul>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg">
          <center>
          <li class="user-header">
            <br>
            <img class="img-profile" width="250" height="160" src="<?= base_url ('assets/img/user/') . $user['image']; ?>">
            <p><br>
            <?= $user['nama'] ?> - Admin Kost <br>
              <small>Member since <?= date('d F Y', $user['tanggal_input']); ?></small>
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
