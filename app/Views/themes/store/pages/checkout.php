<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>Checkout - Wedding ECommerce</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

  <!-- breadcrumb area start -->
  <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
            <div class="breadcrumb__shap">
                <div class="shap">
                    <img src="assets/img/error/shap.png" alt="">
                </div>
                <div class="shap-2">
                    <img src="assets/img/error/shape-2.png" alt="">
                </div>
                <div class="shap-3">
                    <img src="assets/img/error/shape-3.png" alt="">
                </div>
                <div class="shap-4">
                    <img src="assets/img/error/shape-4.png" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row gx-30">
                    <div class="col-xl-12 col-md-12 text-center">
                        <div class="breadcrumb__content z-index">
                            <div class="breadcrumb__section-title-box">
                                <h3 class="breadcrumb__title">Checkout</h3>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!--Checkout start-->
        <section class="rr-checkout-area pb-120 pt-120" data-bg-color="#EFF1F5" style="background-color: rgb(239, 241, 245);">
            <div class="container">
            <div id="flash" data-flash="<?= session()->getFlashdata('success') ?>"></div>
                <form action="<?= base_url(route_to('order'))?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row">
                  <div class="col-lg-7">
                     <div class="rr-checkout-bill-area">
                        <h3 class="rr-checkout-bill-title">Billing Details</h3>

                        <div class="rr-checkout-bill-form">
                          
                              <div class="rr-checkout-bill-inner">
                                 <div class="row">
                                    <input type="hidden" name="user" value="<?=user()->id?>">
                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Name </label>
                                          <input type="text" name="nama" placeholder="First Name" value="<?= user()->username ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Email address </label>
                                          <input type="email" name="email" placeholder="" value="<?= user()->email ?>"  readonly>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Nomor Handphone</label>
                                          <input type="text" name="no_hp" placeholder="Nomor Handphone Penerima" value="<?= user()->telp ?>" required>
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Tanggal Acara</label>
                                          <input type="date" name="tgl_acara" required>
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Alamat</label>
                                          <input type="text" placeholder="<?= (user()->alamat == null || user()->alamat == '' ) ? 'Alamat anda' : ''?>" name="alamat" value="<?= user()->alamat?>" required>
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Bukti Pembayaran<span>*</span></label>
                                          <input type="file" name="bukti" required>
                                       </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                       <div class="rr-checkout-input">
                                          <label>Keterangan (optional)</label>
                                          <textarea name="keteragngan" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                          
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <!-- checkout place order -->
                     <div class="rr-checkout-place white-bg">
                        <h3 class="rr-checkout-place-title">Your Order</h3>

                        <div class="rr-order-info-list">
                           <ul>

                              <!-- header -->
                              <li class="rr-order-info-list-header">
                                 <h4>Product</h4>
                                 <h4>Total</h4>
                              </li>

                              <!-- item list -->
                               
                              <?php 
                                  $cart = \Config\Services::cart();
                                foreach ($cart->contents() as $key => $value) : 
                              ?>

                                <li class="rr-order-info-list-desc">
                                     <p><?= $value['name'] ?> <span> x <?= $value['qty'] ?></span></p>
                                     <span><?= $value['subtotal'] ?></span>
                                </li>
                                <?php endforeach; ?>
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                               <input type="hidden" name="qty" value="<?= $value['qty'] ?>">
                              <!-- subtotal -->
                              <li class="rr-order-info-list-subtotal">
                                 <span>Subtotal</span>
                                 <span><?=  number_to_currency($cart->total(), 'IDR');?></span>
                              </li>

                              <!-- total -->
                              <li class="rr-order-info-list-total">
                                 <span>Total</span>
                                 <span><?=  number_to_currency($cart->total(), 'IDR'); ?></span>
                                 <input type="hidden" name="harga" id="harga" value="<?= $cart->total()?>">
                              </li>
                           </ul>
                        </div>
                        <div class="rr-checkout-payment">
                           <div class="rr-checkout-payment-item">
                              <label for="back_transfer" class="ms-0">Silahkan Transfer ke Nomor Rekening ini Sesuai Total Harga</label>
                              <p>Nomor Rekening: <b>216601010344509 (BRI)</b></p>
                              <div class="rr-checkout-payment-desc direct-bank-transfer">
                              </div>
                           </div>

                           <div class="rr-checkout-payment-item">
                              <label for="payment">Pembayaran</label>
                              <br>
                                <select name="payment" id="payment" class="mb-3" required>
                                    <option selected disabled>Pilih Pembayaran</option>
                                     <option value="dp">DP</option>
                                    <option value="lunas">Lunas</option>
                                </select>
                            <br>
                             
                              <div class="rr-checkout-payment-desc direct-bank-transfer">
                              </div>
                           </div>
                        </div>
                        <p id="pembayaran_method" class="mb-3"></p>
                        <div class="rr-checkout-btn-wrapper">
                          
                           <button type="submit" class="rr-checkout-btn w-100">Place Order</button>
                        </div>
                     </div>
                   
                    </div>
                </div>
            </form>
            </div>
         </section>
        <!--Checkout end-->

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
        $('#payment').change(function(){
            var harga = <?= $cart->total(); ?>;
            var payment = $(this).val();
            if(payment == 'dp'){
                $('#harga').val(harga/2);
                $('#pembayaran_method').html('Anda akan membayar DP 50% dari total harga sejumlah ' + harga/2);
            }else{
                $('#harga').val(harga);
                $('#pembayaran_method').html('Anda akan membayar Lunas 100% dari total harga sejumlah ' + harga);
            }
        });
    });

</script>
<?= $this->endSection() ?>