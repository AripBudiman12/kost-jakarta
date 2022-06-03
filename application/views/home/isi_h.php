<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container-fluid">      
        <span class="navbar-brand">KOST-JAKARTA</span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Buku_Tamu'); ?>">Buku-Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Autentifikasi'); ?>">Log-in</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<!-- jumbptron -->
<div class="jumbotron">
    <div class="container">
        <div class="jb">
        <div id="carouselExampleInterval" class="carousel slide mx-auto" data-ride="carousel" >
                  <div class="carousel-inner" >
                      <div class="carousel-item active" >
                      <img src="<?php echo base_url() ?>assets/img/iklan/iklan.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" >
                      <img src="<?php echo base_url() ?>assets/img/iklan/iklan2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                      <img src="<?php echo base_url() ?>assets/img/iklan/iklan3.jpg" class="d-block w-100" alt="...">
                      </div>
                  </div>
               </div>

            <h3 class="display-4 text-center my-sm-3">Selamat datang di <b style="color:orange">KOST-JAKARTA</b></h3>
            <h2 class="text-center">Kost di DKI JAKARTA</h2>
            <h4 class="text-center" style="color:white">cari berdasarkan <b style="color:orange">Lokasi dan Harga</b></h4>
            <div class="search">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="simple-results.html">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="isi-content">
    <div class="container">
        <h1 style="text-align:center">Rekomendasi <b>KOST</b></h1>
        <hr>
        <div class="row justify-content-center">
            <?php foreach ($kost as $k): ?>
            <div class="col-md-4">
                <div class="card shadow mb-5">
                    <!-- <div class="inner mx-auto">
                        <a href="<?= $kost->detail ?>"><img src="<?= $kost-> gambar ?>" class="card-img-top" alt=""></a>
                    </div> -->
                    <div class="card-body">
                        <p class="card-text"><?= $k-> lokasi; ?></p>
                        <h5 class="card-title"><?= substr($k-> alamat,0,23)?>...</h5><br>
                        <h5 class="card-font" style="color: green;"><?= $k->harga ?></h5>
                        <p class="card-text"><?= substr($k-> subalamat,0,30)?>...</p>
                        <a href="Autentifikasi" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                        <?= $this->pagination_bootstrap->render()?>
                        </div>
                    </div>
    </div>
</div>

<div class="komentar">
    <div class="container">
        <h1>Form Buku Tamu</h1>
        <hr>
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