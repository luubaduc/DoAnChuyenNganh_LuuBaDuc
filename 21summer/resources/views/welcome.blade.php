<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/frontend/images/favicon.png')}}">
    <title>21 Summer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
  </head>
  <body class="goto-here">
        <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 8496 5265 248</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><a href="https://mail.google.com"><span class="icon-envelope"></span></a></div>
                            <span class="text">luubaduc0308@gmail.com</span>
                        </div>

                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Every summer is your season
                            </span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{URL::to('/index')}}">21 Summer</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{URL::to('/index')}}" class="nav-link">Trang chủ</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mục lục</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Sản phẩm đơn lẻ</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Thanh toán</a>
              </div>
            </li>
              <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="{{URL::to('/dangky')}}" class="nav-link">Đăng ký</a> </li>
                
              
              <?php
                  use Illuminate\Support\Facades\Session;                                
                  $name = Session::get('user_username');
                  if ($name)
                  {
                    ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php
                   echo $name;
                   ?>
                  </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="{{URL::to('/login')}}">Đăng xuất</a>
                     <!--  <a class="dropdown-item" href="product-single.html">Single Product</a>
                      <a class="dropdown-item" href="cart.html">Cart</a>
                      <a class="dropdown-item" href="checkout.html">Checkout</a> -->
                  </div>
                  </li>
                  <?php 
                  }
                  else
                  { 
                ?>
                <li class="nav-item "><a href="{{URL::to('/dangnhap')}}" class="nav-link">
                  Đăng nhập
                </a></li>
                  <?php 
                }
                  ?>

              <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
          <div class="home-slider owl-carousel">
          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <img class="one-third order-md-last img-fluid" src="public/frontend/images/2.png" alt="">
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">#Hàng mới về</span>
                        <div class="horizontal">
                            <h1 class="mb-4 mt-3">Bộ sưu tập giày 2021</h1>
                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi họ ở và cung cấp cho nó những chất dinh dưỡng cần thiết. Đó là một đất nước hoang tưởng.</p>
                            
                            <p><a href="#" class="btn-custom">Discover Now</a></p>
                          </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <img class="one-third order-md-last img-fluid" src="public/frontend/images/345.png" alt="">
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">#Hàng mới về</span>
                        <div class="horizontal">
                            <h1 class="mb-4 mt-3">Bộ sưu tập giày mới nhất</h1>
                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi họ ở và cung cấp cho nó những chất dinh dưỡng cần thiết. Đó là một đất nước hoang tưởng.</p>
                            
                            <p><a href="#" class="btn-custom">Discover Now</a></p>
                          </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                    <span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Miễn phí giao hàng</h3>
                <p>Xa xa, đằng sau những ngọn núi chữ, xa những quốc gia Vokalia và Consonantia, có những văn tự mù mịt.</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                    <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Hỗ trợ khách hàng</h3>
                <p>Xa xa, đằng sau những ngọn núi chữ, xa những quốc gia Vokalia và Consonantia, có những văn tự mù mịt.</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                    <span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Thanh toán an toàn</h3>
                <p>Xa xa, đằng sau những ngọn núi chữ, xa những quốc gia Vokalia và Consonantia, có những văn tự mù mịt.</p>
              </div>
            </div>      
          </div>
        </div>
            </div>
        </section>

   <!-- Cái lệnh yield này sẽ giúp cho khi nhấn home thì nó sẽ load lại trang chủ--> 
        @yield('content')
    

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Follow Us On Instagram</h2>
            <p>Xa xa, đằng sau những ngọn núi chữ, xa những quốc gia Vokalia và Consonantia, có những văn tự mù mịt. Họ sống trong tách biệt</p>
          </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-1.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-2.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-3.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-4.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/public/frontend/images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-5.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="public/frontend/images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(public/frontend/images/gallery-6.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
        </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
            <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                        </a>
                    </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">21 Summer</h2>
              <p>Xa xa, sau những ngọn núi chữ, xa các nước Vokalia và Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.youtube.com"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Trang chủ</a></li>
                <li><a href="#" class="py-2 d-block">Mục lục</a></li>
                <li><a href="#" class="py-2 d-block">Giới thiệu</a></li>
                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hỗ trợ</h2>
              <div class="d-flex">
                  <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                    <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                    <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                    <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                    <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FAQs</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Hệ thống cửa hàng</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">555/9,phường Phú Hòa,Thành phố Thủ Dầu Một </span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 8496 5265 248</span></a></li>
                    <li><a href="https://mail.google.com"><span class="icon icon-envelope"></span><span class="text">luubaduc0308@gmail.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/" target="_blank">21 Summer</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/aos.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/bootstrap-datepicker.js')}}')}}"></script>
  <script src="{{asset('public/frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('public/frontend/js/google-map.js')}}"></script>
  <script src="{{asset('public/frontend/js/main.js')}}"></script>
    
  </body>
</html>