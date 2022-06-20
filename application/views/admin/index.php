<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kost Jakarta</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">KOST</span>
                            <span class="info-box-number">
                                35
                            </span>
                        </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">PROVINSI</span>
                        <span class="info-box-number">5</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-image"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">IMAGE</span>
                        <span class="info-box-number">35</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>        
                        <div class="info-box-content">
                            <span class="info-box-text">ADMIN</span>
                            <span class="info-box-number">5</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                        <!-- USERS LIST -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar User</h3>
                                    <div class="card-tools">                                        
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="users-list clearfix">
                                    <li> <i class="fa fa-user-circle" aria-hidden="true" alt="User Image"></i>
                                        <!-- <img src="dist/img/user1-128x128.jpg" alt="User Image"> -->
                                        <a class="users-list-name" href="#">Dwi Nurmala sari</a>
                                        <span class="users-list-date">14-06-2022</span>
                                    </li>
                                    <li>
                                        <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                        <a class="users-list-name" href="#">Muhammad Abizar</a>
                                        <span class="users-list-date">14-06-2022</span>
                                    </li>
                                    <li>
                                        <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                        <a class="users-list-name" href="#">Teguh Ramdhani</a>
                                        <span class="users-list-date">14-06-2022</span>
                                    </li>
                                    <li>
                                        <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                        <a class="users-list-name" href="#">Latifah Ningrum</a>
                                        <span class="users-list-date">14-06-2022</span>
                                    </li>
                                    <li>
                                        <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                        <a class="users-list-name" href="#">Arip Budiman</a>
                                        <span class="users-list-date">14-06-2022</span>
                                    </li>
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="javascript:">View All Users</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>  
                        <!--/.card -->
                    </div>
                    <!-- col -->

                     <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Products</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <!-- item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?php echo base_url() ?>assets/img/kost/jakbar1.jpg" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Jakarta Barat
                                            <span class="badge badge-warning float-right">Rp.1.800.000</span></a>
                                        <span class="product-description">
                                        Blanca Kost Bandengan selatan
                                        </span>
                                    </div>
                                </li>
                                <!-- item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?php echo base_url() ?>assets/img/kost/jakbar2.jpg" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Jakarta Barat
                                            <span class="badge badge-success float-right">Rp.1.800.000</span></a>
                                        <span class="product-description">
                                            kost Exclusive Tanjung Duren Selatan
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="<?= base_url('Kost'); ?>" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                        <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Buku Tamu</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PENILAIAN</th>
                                <th scope="col">KOMENTAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = 1;
                            foreach ($buku_tamu as $b) { ?>
                                <tr>
                                    <th scope="row"><?= $a++; ?></th>
                                    <td><?= $b['nama']; ?></td>
                                    <td><?= $b['email']; ?></td>
                                    <td><?= $b['penilaian']; ?></td>
                                    <td><?= $b['komentar']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-right">View All Coment</a>
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->    
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->