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
            <hr>
        <div class="row justify-content-center">
                        <?php foreach ($search as $k): ?>
                        
                            <div class="col-md-4">
                            
                                <div class="card shadow mb-5" >
                                    <div class="inner mx-auto">
                                        <a href=""><img src="<?= base_url('assets/img/kost/') . $k->image ?>" class="card-img-top" data-toggle="modal" 
                                        data-target="#ekkoLightbox-336"></a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?= $k-> lokasi; ?></p>
                                        <h5 class="card-title"><?= substr($k-> alamat,0,23)?>...</h5><br>
                                        <h5 class="card-font" style="color: green;"><?= $k->harga ?></h5>
                                        <p class="card-text"><?= substr($k-> subalamat,0,30)?>...</p>
                                        <a href="Autentifikasi" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                            </div> 

                            <!-- Image Modal -->
                            <div id="ekkoLightbox-336" class="ekko-lightbox modal fade in show" tabindex="-1" role="dialog" arial-modal="true" 
                                style="display: blok; padding-right: 17px;">
                                <div class="modal-dialog" role="document" style="display: block; flex: 1 1 1px; max-width: 500px;">
                                    <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-tittle"><?= $k-> lokasi; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">x</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="ekko-lightbox-container" style="height: 100%;">
                                                    <div class="ekko-lightbox-item fade in show">
                                                        <img src="<?= base_url('assets/img/kost/') . $k->image ?>" class="card-img-top" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
        </div>
</div>