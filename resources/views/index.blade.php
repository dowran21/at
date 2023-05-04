@extends('layouts.app')

@section('content')

  <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <span>Ajaýyp Tilsimatlar</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>
              {{-- <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li> --}}
              <li><a class="nav-link scrollto" href="#services">{{ __('Services') }}</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">{{ __('Portfolio') }}</a></li>
              <li><a class="nav-link scrollto" href="#contact">{{ __('contact') }}</a></li>
              <li>
                
                <a class="nav-link dropdown-toggle getstarted" href="#" data-toggle="dropdown" id="langDropdown">
                  {{ LaravelLocalization::getSupportedLocales()[App::getLocale()]['name'] }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="langDropdown" id="langDropdownBox">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if ($localeCode != App::getLocale())
                            <a class="dropdown-item" rel='alternate' hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" >
                                {{$properties['name']}}
                            </a>
                        @endif
                    @endforeach
                </div>
              </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>
  <!-- End Header -->



  <!-- ======= Hero Section ======= -->
    @include('partials.hero')
  <!-- End Hero -->



  <main id="main">

    <!-- ======= About Section ======= -->
      {{-- @include('partials.about') --}}
    <!-- End About Section -->



    <!-- ======= Values Section ======= -->
      @include('partials.values')
    <!-- End Values Section -->



    <!-- ======= Counts Section ======= -->
      @include('partials.counts')
    <!-- End Counts Section -->



    <!-- ======= Features Section ======= -->
      @include('partials.features')
    <!-- End Features Section -->



    <!-- ======= Services Section ======= -->
      @include('partials.services')
    <!-- End Services Section -->



    <!-- ======= Pricing Section ======= -->
      @include('partials.pricing')
    <!-- End Pricing Section -->



    <!-- ======= F.A.Q Section ======= -->
      {{-- @include('partials.faq') --}}
    <!-- End F.A.Q Section -->



    <!-- ======= Portfolio Section ======= -->
      @include('partials.portfolio')
    <!-- End Portfolio Section -->



    <!-- ======= Testimonials Section ======= -->
      {{-- @include('partials.testimonials') --}}
    <!-- End Testimonials Section -->



    <!-- ======= Team Section ======= -->
      {{-- @include('partials.team') --}}
    <!-- End Team Section -->



    <!-- ======= Clients Section ======= -->
      {{-- @include('partials.clients') --}}
    <!-- End Clients Section -->



    <!-- ======= Recent Blog Posts Section ======= -->
      @include('partials.recentBlogPostsSection')
    <!-- End Recent Blog Posts Section -->



    <!-- ======= Contact Section ======= -->
      @include('partials.contact')
    <!-- End Contact Section -->


  </main><!-- End #main -->





  <!-- ======= Footer ======= -->
      @include('layouts.footer')
  <!-- End Footer -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/dropdownLang.js') }}"></script>

@endsection