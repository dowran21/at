<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
        <h2>{{ __('Portfolio') }}</h2>
        <p>{{ __('latest_works') }}</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">{{ __('all') }}</li>
            <li data-filter=".filter-app">{{ __('app') }}</li>
            {{-- <li data-filter=".filter-card">Card</li> --}}
            <li data-filter=".filter-web">{{ __('web') }}</li>
            </ul>
        </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/ayterek_app.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ayterek App</h4>
                <p>Ayterek App</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/ayterek_app.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                {{-- <a href="{{ route('gamysh-details') }}" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/ayterek.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ayterek Web</h4>
                <p>Ayterek Web</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/ayterek.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                {{-- <a href="{{ route('gyzyleller-details') }}" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/gamysh.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Gamysh</h4>
                <p>Gamysh</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/gamysh.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                {{-- <a href="{{ route('bazar-details') }}" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/gyzyleller.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Gyzyleller</h4>
                <p>Gyzyleller</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/gyzyleller.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                {{-- <a href="{{ route('zoon-details') }}" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>

</section>