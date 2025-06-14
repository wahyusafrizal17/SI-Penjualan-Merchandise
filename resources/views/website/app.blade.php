<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO metadata khusus website pembelajaran bahasa Arab -->
    <meta name="description" content="Platform edukasi bahasa Arab interaktif untuk anak-anak dan pemula. Belajar membaca, menulis, dan berbicara dalam bahasa Arab dengan mudah dan menyenangkan." />
    <meta name="keywords" content="belajar bahasa Arab, pendidikan Arab anak, kursus bahasa Arab, pembelajaran Arab online, huruf hijaiyah, bahasa Arab interaktif" />
    <!-- Font yang cocok untuk konten edukatif Arab -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/new-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Program - Belajar Islam dan Bahasa Arab</title>
  </head>
  <body>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
      <div class="sticky-nav js-sticky-header">
        <div class="container position-relative">
          <div class="site-navigation text-center">
            <a href="/" class="logo menu-absolute m-0" style="margin-left: -155px !important;">
                <img src="{{ asset('website/images/logo.png') }}" alt="" width="8%"> <span>e-Learning</span>
            </a>
            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
              <li class="active">
                <a href="/">Home</a>
              </li>
              {{-- <li class="has-children">
													<a href="#">Dropdown</a>
													<ul class="dropdown">
														<li>
															<a href="elements.html">Elements</a>
														</li>
														<li class="has-children">
															<a href="#">Menu Two</a>
															<ul class="dropdown">
																<li>
																	<a href="#">Sub Menu One</a>
																</li>
																<li>
																	<a href="#">Sub Menu Two</a>
																</li>
																<li>
																	<a href="#">Sub Menu Three</a>
																</li>
															</ul>
														</li>
														<li>
															<a href="#">Menu Three</a>
														</li>
													</ul>
												</li> --}}
              <li>
                <a href="{{ route('elearning.materi') }}">Materi</a>
              </li>
              {{-- <li>
                <a href="news.html">Artikel</a>
              </li> --}}
              <li>
                <a href="{{ route('elearning.about') }}">Tentang Kami</a>
              </li>
              {{-- <li>
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="contact.html">Contact</a>
												</li> --}}
            </ul>
            <a href="{{ route('elearning.materi') }}" class="btn-book btn btn-primary btn-sm menu-absolute">
               Belajar Sekarang </a>
            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    @yield('content')

    <div class="site-footer" style="padding: 10px 0px 0px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> Copyright ©{{date('Y')}} By E-Learning
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <script src="{{ asset('website/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/aos.js') }}"></script>
    <script src="{{ asset('website/js/custom.js') }}"></script>
  </body>
</html>