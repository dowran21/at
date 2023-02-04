<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo.png') }}" alt="">
        <span>Ajaýyp Tilsimatlar</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ route('home') }}#hero">{{ __('Home') }} </a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#about">{{ __('About') }} </a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#services">{{ __('Services') }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#portfolio">{{ __('Portfolio') }}</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
                
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="langDropdown">
              {{ LaravelLocalization::getSupportedLocales()[App::getLocale()]['name'] }}
            </a>

            <div class="getstarted dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="langDropdown">
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