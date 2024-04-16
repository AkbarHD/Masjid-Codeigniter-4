<div class="col-lg-9">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('slider/slider1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Al Baqarah :43</h5>
                    <p>“Dan dirikanlah sholat, tunaikanlah zakat, dan rukuklah beserta orang yang rukuk.”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('slider/slider2.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Al Isra :78</h5>
                    <p>"Laksanakanlah salat sejak matahari tergelincir sampai gelapnya malam dan (laksanakan pula salat) Subuh. Sungguh, salat subuh itu disaksikan (oleh malaikat)."</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('slider/slider3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Al Baqarah :45</h5>
                    <p>"Dan mohonlah pertolongan (kepada Allah) dengan sabar dan salat. Dan (salat) itu sungguh berat, kecuali bagi orang-orang yang khusyuk,"</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <br>
</div>

<div class="col-lg-3">
    <div class="card card-outline card-success">
        <div class="card-header">
            <h3 class="card-title text-success"><b><?= $waktu['data']['lokasi'] ?></b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">

            <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Subuh</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['subuh'] ?>
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Dhuha</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['dhuha'] ?>
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Dzuhur</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['dzuhur'] ?>
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Ashar</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['ashar'] ?>
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Maghrib</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['maghrib'] ?>
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <i class="far fa-clock fa-3x text-success"></i>
                    </div>
                    <div class="product-info">
                        <a class="product-title">Isya</a>
                        <span class="product-description">
                            <?= $waktu['data']['jadwal']['isya'] ?>
                        </span>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <b class="text-success"><?= $waktu['data']['jadwal']['tanggal'] ?></b>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php
if ($kas_m == null) {
    $pemasukan_m[] = 0;
    $pengeluaran_m[] = 0;
} else {
    foreach ($kas_m as $key => $value) {
        $pemasukan_m[] = $value['kas_masuk'];
        $pengeluaran_m[] = $value['kas_keluar'];
    }
}
$saldo_m = array_sum($pemasukan_m) - array_sum($pengeluaran_m);

if ($kas_s == null) {
    $pemasukan_s[] = 0;
    $pengeluaran_s[] = 0;
} else {
    foreach ($kas_s as $key => $value) {
        $pemasukan_s[] = $value['kas_masuk'];
        $pengeluaran_s[] = $value['kas_keluar'];
    }
}
$saldo_s = array_sum($pemasukan_s) - array_sum($pengeluaran_s);
?>


<div class="col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="info-box">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-money-bill-wave"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Saldo Kas Masjid</span>
                    <span class="info-box-number">
                        Rp. <?= number_format($saldo_m, 0) ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hand-holding-heart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Saldo Kas Sosial</span>
                    <span class="info-box-number">
                        Rp. <?= number_format($saldo_s, 0) ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->


    </div>
</div>