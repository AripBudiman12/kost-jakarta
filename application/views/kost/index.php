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
                            <td>-</td>
                            <td>-</td>
                            <td>U</td>
                            <td>
                            <a style="align: left;" href="<?= base_url('') ?>" class="btn btn-info btn-flat">Ubah</a>
                            <a style="float: right;" href="<?= base_url('') ?>" class="btn btn-info btn-flat">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>