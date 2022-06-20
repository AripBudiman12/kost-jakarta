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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
    </section>
</div>
