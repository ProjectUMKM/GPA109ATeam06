<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aminah Bakery</title>
  <meta name="description" content="">
  {{-- <meta name="keywords" content=""> --}}

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Aminah Bakery</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="https://www.instagram.com/aminahbakery_plg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">Order Now</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="order-2 col-lg-5 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Bahan super premium<br>Harga super murah</h1>
            <p data-aos="fade-up" data-aos-delay="100"></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="https://www.instagram.com/aminahbakery_plg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==/" class="btn-get-started" target="_blank">Order Now</a>
            </div>
          </div>
          <div class="order-1 col-lg-5 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/tokoroti/roti8.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/tokoroti/roti10.jpeg" class="mb-4 img-fluid" alt="">
            <div class="book-a-table">
              <h3>Order Now</h3>
              <a href="https://www.instagram.com/direct/new/?text=Order%20Now&to=aminahbakery_plg" target="_blank">@aminahbakery_plg</a>

            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Selamat datang di Aminah Bakery! Kami bukan sekadar toko roti biasa—kami hadir untuk memberikan pengalaman roti yang beda dari yang lain. Sejak pertama kali buka, tujuan kami jelas membuat roti yang enak, berkualitas, dan bikin setiap gigitan jadi momen yang nggak terlupakan.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Bahan berkualitas</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Harga terjangkau</span></li>
                {{-- <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li> --}}
              </ul>
              <p>Apapun selera kamu, mau yang klasik atau yang lebih kekinian, di Aminah Bakery selalu ada yang cocok. Kami juga selalu terbuka buat eksperimen, biar kamu nggak pernah bosen sama pilihan roti yang ada.

                Makasih sudah mampir! Semoga setiap gigitan roti kami bisa nambahin kebahagiaan di hari-hari kamu.
                </p>

              <div class="mt-4 position-relative">
                <img src="assets/img/tokoroti/roti15.jpeg" class="img-fluid" alt="">
                {{-- <a href="https://www.instagram.com/aminahbakery_plg/reel/DGJ8YOgSpMoZLdLCZnLaOKCZUUiUrHxiQHBbWY0/" class="glightbox pulsating-play-btn"></a> --}}
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Bakery Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="text-center tab-header">
              <p>Menu</p>
              <h3>BAKERY</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti1.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti1.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Shredded Bread</h4>
                <p class="ingredients">
                  Roti Abon, Lezatnya Gurih, Nikmatnya Tiada Henti!
                </p>
                <p class="price">
                  Rp.6000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti2.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti2.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Almond Bread</h4>
                <p class="ingredients">
                  {{-- Roti Tiramisu, Manisnya Penuh Kenangan, Lembutnya Sempurna! --}}
                  Roti Almond: Dimulai dengan Rasa, Diakhiri dengan Kelezatan!
                </p>
                <p class="price">
                  Rp.6000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti3.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti3.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Meses Cceres Chocolate Bread</h4>
                <p class="ingredients">
                  Roti Coklat Meses Ceres, Coklatnya Melimpah, Manisnya Sempurna!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti14.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti14.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate Cheese Banana Braed</h4>
                <p class="ingredients">
                  Roti Coklat Isi Pisang, Kombinasi Lezat, Sensasi Tiada Duanya!
                </p>
                <p class="price">
                  Rp.6000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti5.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti5.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Oreo Bread</h4>
                <p class="ingredients">
                  Roti Oreo, Paduan Sempurna Coklat dan Krem, Kenikmatan yang Bikin Terpesona!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti6.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti6.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Sausage Patties</h4>
                <p class="ingredients">
                  Roti Sosis, Gigitan Penuh Kejutan, Rasa yang Tak Terlupakan!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti7.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti7.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Strawberry Bread</h4>
                <p class="ingredients">
                  Roti Strawberry, Rasa Manis yang Melekat di Hati!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti9.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti9.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Srikaya Bread</h4>
                <p class="ingredients">
                  Roti Srikaya, Kejutan Manis dari Alam Tropis!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti11.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti11.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate Bread</h4>
                <p class="ingredients">
                  Roti Coklat, Paduan Sempurna Antara Lembut dan Coklat!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti12.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti12.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Pinapple Bread</h4>
                <p class="ingredients">
                  Roti Nanas, Rasa yang Menggugah Semua Indera!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti13.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti13.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Redvelvet Bread</h4>
                <p class="ingredients">
                  Roti Redvelvet, Sensasi Merah yang Menggoda Lidah, Kelembutan yang Membakar Selera!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/tokoroti/roti14.jpeg" class="glightbox"><img src="assets/img/tokoroti/roti14.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Cheese Bread</h4>
                <p class="ingredients">
                  Roti Keju, Harmoni Keju yang Mewah dalam Setiap Gigitan!
                </p>
                <p class="price">
                 Rp.6000
                </p>
              </div><!-- Menu Item -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti1.jpeg"><img src="assets/img/tokoroti/roti1.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti2.jpeg"><img src="assets/img/tokoroti/roti2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti3.jpeg"><img src="assets/img/tokoroti/roti3.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti4.jpeg"><img src="assets/img/tokoroti/roti4.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti5.jpeg"><img src="assets/img/tokoroti/roti5.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti6.jpeg"><img src="assets/img/tokoroti/roti6.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti7.jpeg"><img src="assets/img/tokoroti/roti7.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti9.jpeg"><img src="assets/img/tokoroti/roti9.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti11.jpeg"><img src="assets/img/tokoroti/roti11.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti12.jpeg"><img src="assets/img/tokoroti/roti12.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti13.jpeg"><img src="assets/img/tokoroti/roti13.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti13.jpeg"><img src="assets/img/tokoroti/roti14.jpeg" class="img-fluid" alt=""></a></div>
            {{-- <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/tokoroti/roti8.jpeg"><img src="assets/img/tokoroti/roti8.jpeg" class="img-fluid" alt=""></a></div> --}}
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <!-- <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe> -->
            <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1739948028195!5m2!1sen!2sid!6m8!1m7!1sqY2pJjQHqsgM0gXDoCpFxg!2m2!1d-3.003376602557141!2d104.7713093606845!3f231.70164979472128!4f2.3149206487711638!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="flex-shrink-0 icon bi bi-geo-alt"></i>
              <div>
                <h3>Address</h3>
                <p>Jl. Gub H Bastari No.555, 8 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30252</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="flex-shrink-0 icon bi bi-telephone"></i>
              <div>
                <h3>Call Us</h3>
                <p>+6288287830821</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="flex-shrink-0 icon bi bi-envelope"></i>
              <div>
                <h3>Email Us</h3>
                <p>meilizanuraini99@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="flex-shrink-0 icon bi bi-clock"></i>
              <div>
                <h3>Opening Hours<br></h3>
                {{-- <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p> --}}
                <p><strong>Always Open</strong> </p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>


        {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}
        <form action="{{ route('saveContact') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
        {{-- <form action="{{ route('saveContact') }}" method="POST" class="php-email-form"> --}}
            @csrf
            <div class="row gy-4">

                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>

                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                </div>

                <div class="text-center col-md-12">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Kirim saran anda</button>
                </div>

            </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>Jl. Gub H Bastari No.555, 8 Ulu, Kecamatan Seberang Ulu I</p>
            <p>Kota Palembang, Sumatera Selatan 30252</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+6288287830821</span><br>
              <strong>Email:</strong> <span>meilizanuraini99@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Always Open</strong>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> --}}
            {{-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> --}}
            <a href="https://www.instagram.com/hayat_coffeebakery?igsh=ZWhjdGRxd24yeHpk" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
            {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
          </div>
        </div>

      </div>
    </div>

    <div class="container mt-4 text-center copyright">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">KELOMPOK 6</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        {{-- Designed by <a href="https://bootstrapmade.com/">Daffa & Fathir</a> --}}
        Designed by <a href="https://www.instagram.com/daffalf?igsh=bGt5a3JpMzdneTQz" target="_blank">Daffa</a>
                    <a href="#" target="_blank">&</a>
                    <a href="https://www.instagram.com/m.fatir43_?igsh=MTI5OW9wdG5jbjduag==" target="_blank">Fathir</a>
      </div>
            <a href="/login" target="_blank">Login</a>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
