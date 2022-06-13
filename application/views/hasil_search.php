<div class="container">
            <?= form_open('home/search_data') ;?>
                <div class="row justify-content-between " style="padding: 10px 0 ;">
                    <div class="col-4">
                    <a href="<?= site_url('home/index')?>" class="btn btn-outline-warning btn-sm">kembali</a>
                    </div>
                    <div class="col-6">
                            <div class="search-box">
                                <input type="text" name="yangdicari" class="search" placeholder="search..">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                    </div>
                </div>
            <?= form_close(); ?>
        <div class="row justify-content-center">
                        <?php foreach ($kost as $k): ?>
                        
                            <div class="col-md-4">
                            
                                <div class="card shadow mb-5" >
                                    <div class="inner mx-auto">
                                    <a href="Autentifikasi"><img src="<?= base_url('assets/img/kost/') . $k->image ?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text"><b><?= $k->lokasi?></b></p>
                                        <h5 class="card-title"><?= substr($k->alamat,0,23)?>...</h5>
                                        <span class="card-font"><?= $k->harga?></span>
                                        <p class="card-text"><?= substr($k->subalamat,0,30)?>... </p>
                                        <a href="" class="btn btn-info btn-sm">lihat detail</a>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach; ?>
        </div>
</div>