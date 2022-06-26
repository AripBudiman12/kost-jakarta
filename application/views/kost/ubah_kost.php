<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?= $this->session->flashdata('pesan'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php } ?>
                    <?= $this->session->flashdata('pesan'); ?>
                    <?php foreach ($data_kost as $k) { ?>
                        <form action="<?= base_url('kost/ubahkost'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="<?php echo $k['id']; ?>">
                                <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi" placeholder="Masukkan lokasi kost" value="<?= $k['lokasi']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan nama alamat" value="<?= $k['alamat']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="subalamat" name="subalamat" placeholder="Masukkan nama subalamat" value="<?= $k['subalamat']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan harga" value="<?= $k['harga']; ?>">
                            </div>
                            <div class="form-group">
                                <?php
                                if (isset($k['image'])) { ?>

                                    <input type="hidden" name="old_pict" id="old_pict" value="<?php echo $k['image']; ?>">

                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= base_url('assets/img/kost/') . $k['image']; ?>" class="rounded mx-auto mb-3 d-blok" alt="...">
                                    </picture>

                                <?php } ?>

                                <input type="file" class="form-control form-control-user" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="hp" name="hp" placeholder="Masukkan No Telepon" value="<?= $k['hp']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                                <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
    </div>
</div>