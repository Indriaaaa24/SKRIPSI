<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>Wedding Organizer E-Commerce</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
 <!-- hero area start -->
 <section class="rr-hero-area rr-hero-bg pt-120 pb-120 p-relative ">
         <div class="rr-hero-main-shap">
            <div class="rr-hero-shap-1 d-none d-xxl-block">
               <img src="assets/img/hero/shap.png" alt="">
            </div>
            <div class="rr-hero-shap-2">
               <img src="assets/img/hero/shape2.png" alt="">
            </div>
            <div class="rr-hero-shap-3">
               <img src="assets/img/hero/shape3.png" alt="">
            </div>
            <div class="rr-hero-shap-4">
               <img src="assets/img/hero/shape4.png" alt="">
            </div>
         </div>
         <div class="rr-hero-main-wrap">
         <div id="flash" data-flash="<?=session()->getFlashdata('success')?>">
            <div class="container">
               <div class="row gx-30">
                  <div class="col-xl-7 col-lg-7 col-md-12">
                     <div class="rr-hero-banner">
                        <h6 class="rr-hero-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Selamat Datang di Dreams Wedding Planner</h6>
                        <h2 class="rr-hero-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">LET’S REALIZE YOUR DREAMS TOGETHER</h2>
                        <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s" style="text-align: justify;">Kami akan membantu Anda mewujudkan pernikahan impian Anda. <br> Kami akan mengatur segalanya, mulai dari pertemuan keluarga <br>hingga mengatur janji temu dengan pemasok pernikahan. <br> Kami melakukan semuanya untuk Anda.
                        </p>
                        <div class="rr-hero-banner-info d-flex align-items-center ">
                           <div class="rr-hero-banner-btn mr-35 wow rrfadeUp" data-wow-duration=".9s"
                              data-wow-delay=".9s">
                              <a class="rr-btn" href="<?= base_url(route_to('products')) ?>"><span>Pesan Sekarang </span><i
                                    class="fa-solid fa-arrow-right"></i></a>
                           </div>
                           <div class="rr-hero-banner-play d-flex align-items-center wow rrfadeUp"
                              data-wow-duration=".9s" data-wow-delay=".9s">
                              <div class="rr-hero-banner-play z-index-2">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-12 p-relative">
                     <div class="rr-hero-thumb text-end">
                        <div class="rr-hero-banner-shap">
                           <img src="assets/img/hero/camera.png" alt="">
                        </div>
                        <div class="rr-hero-main-thumb wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                           <img src="assets/img/hero/410x560.png" alt="">
                        </div>
                        <div class="rr-hero-sm d-none d-xxl-block wow rrfadeRight" data-wow-duration=".9s"
                           data-wow-delay=".3s">
                           <img src="assets/img/hero/210x270.png" alt="">
                        </div>
                        <div class="rr-hero-border-img wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                           <div class="rr-hero-md d-none d-md-block">
                              <img src="assets/img/hero/210x400.png" alt="">
                           </div>
                           <div class="rr-hero-border-full">
                              <img src="assets/img/hero/img-full.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- hero area end -->
      <!-- about area start -->
      <section class="rr-about-area pt-120 pb-60 fix">
         <div class="container">
            <div class="row gx-30">
               <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 p-relative wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".5s">
                  <div class="rr-about-thumb rr-about-img d-flex align-items-center justify-content-center"
                     data-background="assets/img/about/270-1.png">
                     <img src="assets/img/about/shape.png" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="rr-about-main-info text-center">
                     <div class="rr-about-title-wrapper text-center mb-40">
                        <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s"
                           data-wow-delay=".3s">About Dreams Wedding Planner</span>
                        <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                           Pengalaman Tak Terlupakan Bersama kami. </h3>
                        <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">Dreams Wedding Planner adalah penyelenggara layanan pernikahan terkemuka di Sumedang yang didirikan pada tahun 2020 oleh pasangan suami istri. Berlokasi di Talun, Sumedang Utara, perusahaan ini awalnya fokus pada jasa dekorasi dan makeup artist.</p>
                     </div>
                     <div class="rr-about-btn  wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <a class="rr-btn" href="about"><span>read more <i
                                 class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 p-relative wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".9s">
                  <div class="rr-about-thumb rr-about-img d-flex align-items-center justify-content-center"
                     data-background="assets/img/about/270-2.png">
                     <img src="assets/img/about/shape.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about area end -->
      <!-- service area start -->
      <section class="rr-service-area pt-20 pb-50 p-relative fix">
    <div class="rr-service-shap">
        <img src="assets/img/service/shape.png" alt="img">
    </div>
    <div class="container">
        <div class="row gx-30">
            <div class="rr-section-title-wrapper mb-40 text-center">
                <h3 class="rr-section-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">What We Offer</h3>
            </div>
        </div>
        <div class="row gx-30">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img5.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Paket Pernikahan Lengkap</a></h4>
                        <p>Solusi pernikahan all-in-one yang mencakup semua kebutuhan anda, mulai dari perencanaan hingga hari H.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Dekorasi & Tema</a></h4>
                        <p>Dekorasi menawan sesuai tema pilihan anda untuk menciptakan suasana yang indah dan mempesona.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img2.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Hiburan</a></h4>
                        <p>Flower design is important in weddings <br /> became enhances whole mood and beauty to location.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img3.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Documentations</a></h4>
                        <p>Flower design is important in weddings <br /> became enhances whole mood and beauty to location.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img4.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Makeup & Busana</a></h4>
                        <p>Flower design is important in weddings <br /> became enhances whole mood and beauty to location.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                <div class="rr-service-item text-center mb-30">
                    <div class="rr-service-thumb">
                        <img src="assets/img/service/img6.jpg" alt="">
                    </div>
                    <div class="rr-service-content">
                        <h4 class="rr-service-title"><a href="#">Cattering</a></h4>
                        <p>Flower design is important in weddings <br /> became enhances whole mood and beauty to location.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      <!-- service area end -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(document).ready(function(){
        var flash = $('#flash').data('flash');
        if (flash) {
         Swal.fire({
               icon: 'success',
               title: 'Success',
               text: flash,
         })
        }
        
    });

</script>
<?= $this->endSection() ?>