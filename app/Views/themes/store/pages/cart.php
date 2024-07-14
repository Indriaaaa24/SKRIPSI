<?= $this->extend('themes/store/default') ?>
<?= $this->section('title') ?>
<title>Cart - Wedding ECommerce</title>
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
                                <h3 class="breadcrumb__title">Cart</h3>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
     <!--cart start-->
     <section class="cart-area pt-120 pb-120">
            <div class="container container-small">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price"> Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $cart = \Config\Services::cart();
                                    if(count($cart->contents()) == 0) :
                                       
                                ?>
                                    <tr>
                                        <td colspan="5" class="text-center">Cart is Empty</td>
                                    </tr>
                                <?php else : ?>
                                    <?php
                                        $i = 1;
                                        foreach ($cart->contents() as $key => $value) :
                                        $id[] = $value['id'];
                                        $jumlah = $value['qty'];
                                    ?>
                                        <tr>
                                            <td class="product-remove">
                                                <a id="remove-product" data-rowId="<?= $value['rowid']?>">
                                                <svg width="10" height="10"
                                                        viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 1L1 9" stroke="#001D08" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1 1L9 9" stroke="#001D08" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail d-flex align-items-center">
                                                <a href="shop-details.html">
                                                    <img src="<?= base_url('image_barang/'. $value['options']['gambar'])?>" alt="img" class="img-thumbnail" style="max-height:100px">
                                                </a>
                                                <div class="product-thumbnail__wrapper">
                                                    <div class="product-name"><?= $value['name']?></div>
                                                
                                                </div>
                                            </td>

                                            <td class="product-price"><span class="amount amount-2"><?= number_to_currency($value['price'], 'IDR'); ?></span></td>

                                            <td class="product-quantity-2 text-center">
                                                <div class="rr-shop-details__quantity-2 p-relative">
                                                    <span class="rr-shop-minus"><i class="far fa-minus"></i></span>
                                                    <input type="text" value="<?= $value['qty'] ?>">
                                                    <span class="rr-shop-plus"><i class="far fa-plus"></i></span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">
                                            <?= number_to_currency($value['subtotal'], 'IDR'); ?>
                                            </span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end">
                           
                            <div class="col-xl-5 col-lg-6 col-md-12 col-12 mt-30 ">
                                <div class="rr-shop-box">
                                    <h4 class="rr-shop-title-box mb-20">Order Summary</h4>
                                    <div class="rr-shop-box-wrapper">
                                        <div class="rr-shop-middel-box d-flex justify-content-between ">
                                            <span>Subtotal</span>
                                            <h6><?= number_to_currency($cart->total(), 'IDR'); ?></h6>
                                        </div>
                                       
                                    </div>

                                    <div class="rr-shop-bottom-title d-flex justify-content-between mb-30 mt-40">
                                        <h5>Total</h5>
                                        <h5><?= number_to_currency($cart->total(), 'IDR'); ?></h5>
                                    </div>
                                    <div class="rr-shop-bottom-btn d-flex">
                                        <a  class="rr-shop-btn-box"  href="<?= base_url(route_to('products')) ?>">Keep Shopping</a>
                                        <a class="rr-shop-btn-box-2" href="<?= base_url(route_to('checkout')) ?>">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cart end-->
 
     
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<script>
    $(document).ready(function(){
        $('#remove-product').click(function(){
            var rowId = $(this).data('rowid');
            var url = "<?= base_url('/home/delete') ?>" + '/' + rowId;

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response){
                   
                    Swal.fire({
                        title: 'Success',
                        text: response.message,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                   
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred during the request.',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload();
                    });
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>