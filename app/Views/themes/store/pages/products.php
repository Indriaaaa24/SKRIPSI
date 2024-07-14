<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>Products - Wedding ECommerce</title>
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
                                             <h3 class="rr-section-title">Produk</h3>
                                         </div>
                                     </div>
                                 </div>
                                 <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                 <div class="row gx-30">
                                   
                                    <?php foreach ($products as $product): ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="rr-project-slider-item mb-30">
                                                <div class="rr-project-slider-thumb">
                                                    <img src="<?php echo base_url('image_barang/' . $product['gambar']); ?>" alt="">
                                                </div>
                                                <div class="rr-project-slider-content">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h3 class="rr-project-slider-title text-start"><a ><?= $product['nama'] ?></a></h3>
                                                            <p><?= number_to_currency($product['harga'], 'IDR'); ?></p>
                                                        </div>
                                                        <?php if(logged_in()) : ?>
                                                            <div class="col-4 text-end">
                                                                <a href="" class="btn btn-success add-cart" data-id=<?= $product['id']?>>
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    >
                                                                    <path
                                                                        d="M7.54572 18.9999C7.99759 18.9999 8.3639 18.6162 8.3639 18.1428C8.3639 17.6694 7.99759 17.2856 7.54572 17.2856C7.09385 17.2856 6.72754 17.6694 6.72754 18.1428C6.72754 18.6162 7.09385 18.9999 7.54572 18.9999Z"
                                                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M16.5447 18.9999C16.9966 18.9999 17.3629 18.6162 17.3629 18.1428C17.3629 17.6694 16.9966 17.2856 16.5447 17.2856C16.0929 17.2856 15.7266 17.6694 15.7266 18.1428C15.7266 18.6162 16.0929 18.9999 16.5447 18.9999Z"
                                                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M1 1H4.27273L6.46545 12.4771C6.54027 12.8718 6.7452 13.2263 7.04436 13.4785C7.34351 13.7308 7.71784 13.8649 8.10182 13.8571H16.0545C16.4385 13.8649 16.8129 13.7308 17.112 13.4785C17.4112 13.2263 17.6161 12.8718 17.6909 12.4771L19 5.28571H5.09091"
                                                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
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
                   
                    dataType:'json',
                    data: {
                        id : product_id,
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
