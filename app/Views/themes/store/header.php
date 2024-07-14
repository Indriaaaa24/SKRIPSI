<header class="rr-header-main z-index-3">
      <!-- header area start -->
      <div id="header-sticky" class="rr-header-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-5 col-5">
                  <div class="rr-header-logo">
                  <a href="<?= base_url('/') ?>"><img src="<?= base_url('landing/assets/img/logo/dwp.png')?>" alt="img"></a>
</div>
               </div>
               <div class="col-xl-8 col-lg-1 col-1">
                  <div class="rr-header-main-menu d-none d-xl-block mr-80 p-relative">
                     <nav class="rr-main-menu-content text-end rr-header-1-before">
                        <ul>
                           <li>
                              <a href="<?php echo base_url('/'); ?>">Home</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('about'); ?>">About Us</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('category'); ?>">Category</a>
                           </li>
                            <li>
                           <?php if (logged_in()) :?>
                              <?php 
                              $cart = \Config\Services::cart();
                              
                              ?>
                              <?php if ($cart->contents()==!null) : ?>
                                 <a href="<?php echo base_url('cart'); ?>">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                       >
                                       <path
                                          d="M7.54572 18.9999C7.99759 18.9999 8.3639 18.6162 8.3639 18.1428C8.3639 17.6694 7.99759 17.2856 7.54572 17.2856C7.09385 17.2856 6.72754 17.6694 6.72754 18.1428C6.72754 18.6162 7.09385 18.9999 7.54572 18.9999Z"
                                          stroke="#051145" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       <path
                                          d="M16.5447 18.9999C16.9966 18.9999 17.3629 18.6162 17.3629 18.1428C17.3629 17.6694 16.9966 17.2856 16.5447 17.2856C16.0929 17.2856 15.7266 17.6694 15.7266 18.1428C15.7266 18.6162 16.0929 18.9999 16.5447 18.9999Z"
                                          stroke="#051145" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       <path
                                          d="M1 1H4.27273L6.46545 12.4771C6.54027 12.8718 6.7452 13.2263 7.04436 13.4785C7.34351 13.7308 7.71784 13.8649 8.10182 13.8571H16.0545C16.4385 13.8649 16.8129 13.7308 17.112 13.4785C17.4112 13.2263 17.6161 12.8718 17.6909 12.4771L19 5.28571H5.09091"
                                          stroke="#051145" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 </a>
                                 <span class="badge text-bg-success"><?= $row = count($cart->contents()) ?></span> 
                                 <?php endif; ?>
                           <?php endif; ?>
                            </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-6 col-6">
                  <div class="rr-header-right d-flex align-items-center justify-content-end p-relative">
                    <div class="rr-header-contat d-none d-md-block">
                    <?php if (logged_in()) : ?>
                        
                        <a style="padding-right: 10px;" class="rr-btn-2"  href="<?= base_url('profil/'.user()->id) ?>"><span>Akun</span></a>
                        <a class="rr-btn-2" href="<?= base_url('logout') ?>"><span>Keluar</span></a>
                     <?php else : ?>
                        <a style="padding-right: 10px;" class="rr-btn-2" href="<?= base_url('login') ?>"><span>Masuk</span></a>
                        <a class="rr-btn-2" href="<?= base_url('register') ?>"><span>Daftar</span></a>
                     <?php endif; ?>
                  </div>
                    <div class="rr-header-bar d-xl-none">
                      <button class="rr-menu-bar"><i class="fa-solid fa-bars"></i></button>
                    </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
      <!-- header area end -->

   </header>