<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            </ul>
        </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="{{ route('gamysh-details') }}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="{{ route('gyzyleller-details') }}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="{{ route('bazar-details') }}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="margin-left:50%!important;transform:translateX(-50%)">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="{{ route('zoon-details') }}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>

</section>