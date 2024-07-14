<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>About Us - Wedding ECommerce</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="rr-about-3-area pb-120 pt-120 fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="rr-about-3-thumb">
                    <img src="assets/img/about/about1.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="rr-about-title-wrapper mt-140 ml-40">
                    <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Tentang Dream Wedding Planner</span>
                    <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Kami Akan Wujudkan Impian Pernikahan Anda.</h3>
                    <div class="rr-section-main mb-40 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <p style="text-align: justify;">Dreams Wedding Planner adalah penyelenggara layanan pernikahan terkemuka di Sumedang yang didirikan pada tahun 2020 oleh pasangan suami istri. Berlokasi di Talun, Sumedang Utara, perusahaan ini awalnya fokus pada jasa dekorasi dan makeup artist. Namun, karena tingginya permintaan akan paket layanan pernikahan lengkap, pemilik memutuskan untuk mengembangkan bisnis mereka menjadi wedding planner yang menyediakan semua kebutuhan pernikahan dalam satu paket. Dengan semangat dan hobi mereka dalam mengorganisir acara, Dreams Wedding Planner kini dikenal sebagai penyedia layanan pernikahan yang terpercaya dan berkualitas.</p>
                    </div>
                    <div class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <a href="<?= base_url(route_to('category')) ?>" class="rr-btn-2"><span>Pesan Sekarang <i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rr-project-slider-area rr-project-slider-bg p-relative fix pt-120">
    <div class="container-fluid">
        <div class="row gx-30">
            <div class="col-lg-12">
                <div class="rr-section-title-wrapper mb-40 text-center p-relative z-index-3">
                    <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Dreams Wedding Planner</span>
                    <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Why Choose Us</h3>
                </div>
            </div>
        </div>
        <div class="swiper-container rr-project-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="rr-project-slider-thumb">
                            <img src="assets/img/project/410x370.png" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                            <h3 class="rr-project-slider-title"><a href="#">Berpengalaman</a></h3>
                            <span>im ahli dengan pengalaman luas dalam industri pernikahan.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="rr-project-slider-thumb">
                            <img src="assets/img/project/410x370.png" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                            <h3 class="rr-project-slider-title"><a href="#">Profesional</a></h3>
                            <span>Layanan profesional dengan perhatian pada setiap detail.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="rr-project-slider-thumb">
                            <img src="assets/img/project/410x370.png" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                            <h3 class="rr-project-slider-title"><a href="#">Personalisasi</a></h3>
                            <span>Paket yang disesuaikan dengan keinginan dan anggaran anda.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="rr-project-slider-thumb">
                            <img src="assets/img/project/410x370.png" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                            <h3 class="rr-project-slider-title"><a href="#">Komitmen</a></h3>
                            <span>Dedikasi untuk mewujudkan pernikahan impian anda.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="rr-project-slider-thumb">
                            <img src="assets/img/project/410x370.png" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                            <h3 class="rr-project-slider-title"><a href="#">Kepuasan Pelanggan</a></h3>
                            <span>Kepuasan anda adalah prioritas utama kami.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(document).on("click", ".add-cart", function(e) {
        $.support.cors = true;

        e.preventDefault();
        var product_id = $(this).data('id');
        var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
        var csrfHash = $('.txt_csrfname').val(); // CSRF hash
        // console.log(product_id);

        $.ajax({
            url: "<?php echo base_url(route_to('post_cart')); ?>",
            method: "POST",
            cache: false,

            dataType: 'json',
            data: {
                id: product_id,
                [csrfName]: csrfHash,
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success',
                    text: response.message,
                    icon: 'success',
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                Swal.fire({
                    title: 'Error',
                    text: err.message,
                    icon: 'error',
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    location.reload();
                });
            }

        });
    });
</script>


<?= $this->endSection() ?>