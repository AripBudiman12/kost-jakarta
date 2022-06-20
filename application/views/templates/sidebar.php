  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/img/bg.jpg'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Admin Kost</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('Admin'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widget
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Kost'); ?>" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Data Kost
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('User/anggota'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Buku_Tamu/tamu'); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Buku Tamu
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>