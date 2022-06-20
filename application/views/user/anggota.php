<div class="content-wrapper">  
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul; ?></h1>
                    <span>Role :</span><br>
                    <span>1 = Admin</span><br>
                    <span>2 = Member</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>   
    
    <section>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php } ?>
                    <?= $this->session->flashdata('pesan'); ?>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col" nowrap>Member Sejak</th>
                                <th scope="col">Role</th>
                                <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($anggota as $a) { ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['email']; ?></td>
                                    <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                                    <td><?= $a['role_id']; ?></td>
                                    <td>
                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                            <img src="<?= base_url('assets/img/user/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                        </picture>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>