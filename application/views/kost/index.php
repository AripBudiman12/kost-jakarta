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