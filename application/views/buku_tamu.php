<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $judul; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('buku_tamu'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#komenBaruModal">Komentar</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="card">
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

<!-- Modal tambah komen -->
<div class="modal fade" id="komenBaruModal" tabindex="-1"
    role="dialog" aria-labelledby="komenBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="komenBaruModalLabel">Komentar
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="<?= base_url().'Home/tambah_form'; ?>" id="form_tambah" method="post">
                        <div class="form-group">
                            <label for=""><b>Nama</b></label>
                             <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Email</b></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="nama@gmail.com" required>
                        </div>
                         <div class="form-group">
                            <label for=""><b>Penilaian</b></label>
                            <select class="form-control" name="penilaian" id="penilaian" required>
                                 <option value="">-PILIH-</option>
                                  <option value="bagus">BAGUS</option>
                                 <option value="sangat bagus">SANGAT BAGUS</option>
                                <option value="cukup bagus">CUKUP BAGUS</option>
                                <option value="biasa aja">BIASA AJA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Komentar</b></label>
                            <textarea class="form-control" name="komentar" id="komentar" rows="3" required></textarea>
                        </div>
                        <button type="submit" id="tambah" class="btn btn-info">Simpan</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>