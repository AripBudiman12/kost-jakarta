    <!-- Index -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kost Jakarta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul; ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">KOST</span>
                            <span class="info-box-number">
                                <?= $this->ModelKost->kostWhere(['id'])->num_rows(); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PROVINSI</span>
                            <span class="info-box-number">5</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-image"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">IMAGE</span>
                            <span class="info-box-number"><?= $this->ModelKost->kostWhere(['id'])->num_rows(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>        
                        <div class="info-box-content">
                            <span class="info-box-text">USER</span>
                            <span class="info-box-number"><?= $this->ModelUser->getUserWhere()->num_rows(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
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
                            <div class="card-body p-0">
                                <ul class="users-list clearfix">
                                    <?php
                                    foreach ($data_user as $a) { ?>
                                        <li>
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/user/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="User Image" style="width:60px;height:80px;">
                                            </picture>
                                            <a class="users-list-name" href="#"><?= $a['nama']; ?></a>
                                            <span class="users-list-date"><?= date('d F Y', $a['tanggal_input']); ?></span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="<?= base_url('User/anggota'); ?>">View All Users</a>
                            </div>
                        </div>  
                    </div>
                    
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
                        
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <?php
                                foreach ($data_kost as $k) { ?>
                                    <!-- item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/kost/') .  $k['image'];?>" class="img-fluid 
                                                img-thumbnail" alt="...">
                                            </picture>
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title"><?= $k['lokasi']; ?>
                                                <span class="badge badge-warning float-right"><?= $k['harga']; ?></span></a>
                                            <span class="product-description">
                                            <?= $k['subalamat']; ?>
                                            </span>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= base_url('Kost'); ?>" class="uppercase">View All Products</a>
                        </div>
                    </div>
                </div>
                </div>
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
                </div>
                <div class="card-footer clearfix">
                    <a href="<?= base_url('Buku_Tamu/tamu'); ?>" class="btn btn-sm btn-info float-right">View All Coment</a>
                </div>
            </div>
    </section>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>
