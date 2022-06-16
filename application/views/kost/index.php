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

    <section>
        <div class="card-body">
            <div style="margin-top: -10px;">
                <a href="<?= base_url('Kost') ?>" class="btn btn-primary" data-toggle="modal" 
            data-target="#kostBaruModal">Tambah Kost</a>
            </div><br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LOKASI</th>
                        <th>ALAMAT</th>
                        <th>SUB-ALAMAT</th>
                        <th>HARGA</th>
                        <th>IMAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $k = 1; foreach ($kost as $k) { ?>
                        <tr>
                            <td><?= $k['id']; ?></td>
                            <td><?= $k['lokasi']; ?></td>
                            <td><?= $k['alamat']; ?></td>
                            <td><?= $k['subalamat']; ?></td>
                            <td><?= $k['harga']; ?></td>
                            <td><picture>
                                <source srcset=""
                                type="image/svg+xml">
                                <img src="<?=
                                base_url('assets/img/kost/') . $k['image'];?>" class="img-fluid 
                                img-thumbnail" alt="...">
                            </picture></td>
                            <td>
                             <a href="<?= base_url('kost/ubahkost/') . $k['id']; ?>" onclick="return confirm('Kamu yakin akan mengubah <?= $k['alamat']; ?> ?');" class="badge badge-info"><i class="fas fa-edit"></i>Ubah</a>
                                <a href="<?= base_url('kost/hapuskost/') . $k['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $k['alamat']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Modal Tambah kost baru-->
<div class="modal fade" id="kostBaruModal" tabindex="-1"
    role="dialog" aria-labelledby="kostBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="kostBaruModalLabel">Tambah Kost
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Kost'); ?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi"
                        placeholder="Masukkan Lokasi">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan 
                        Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="subalamat" name="subalamat" placeholder="Masukkan 
                        subalamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i
                        class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->