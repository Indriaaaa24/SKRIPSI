<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>Category - Wedding ECommerce</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="rr-project-slider-area pt-120 pb-90 fix p-relative fix">
                <div class="container">
                    <div class="row gx-30">
                        <div class="col-lg-12">
                            <div class="rr-section-title-wrapper mb-40 text-center p-relative">
                                <h3 class="rr-section-title">Kategori</h3>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-30">
                        <?php foreach ($categories as $category): ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="rr-project-slider-item mb-30 no-image">
                                    <div class="rr-project-slider-content text-center">
                                        <h3 class="rr-project-slider-title">
                                            <a href="<?= base_url(route_to('category_detail', $category['id']))?>">
                                                <?= $category['nama_kategori'] ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Konten Kategori -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
