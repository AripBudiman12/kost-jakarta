<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $judul; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $judul; ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

    <section class="content">
        <?php foreach ($kost as $k): ?>
            <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                                <div class="col-12">
                                <img src="<?= base_url('assets/img/kost/') . $k['image']; ?>" class="product-image" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="my-3"><b><?= $k['lokasi']; ?></b></h3>
                                <h4><?= $k['alamat']; ?></h4>
                                <hr>
                                <p><?= $k['subalamat']; ?></p>
                            <h4 class="mt-3">FASILITAS</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <h4 class="bg-green py-2 px-3 mt-4"><?= $k['fasilitas']; ?></h4>
                            </div>
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                <?= $k['harga']; ?>
                                </h2>
                            </div>
                            <div class="mt-4">
                                <div class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Add to Cart
                                </div>
                                <div class="btn btn-default btn-lg btn-flat">
                                    <i class="fas fa-heart fa-lg mr-2"></i>
                                    Add to Wishlist
                                </div>
                            </div>
                            <div class="mt-4 product-share">
                                <a href="#" class="text-gray">
                                <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                <i class="fab fa-twitter-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                <i class="fas fa-envelope-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                <i class="fas fa-rss-square fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </section>