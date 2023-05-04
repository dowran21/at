<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        {{-- <h2>{{ __('contact') }}</h2> --}}
        <p>{{ __('contact') }}</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>{{ __('address') }}</h3>
                <p>Parahat 2/4, jaý 2, Blok "A"<br>Aşgabat / Türkmenistan</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>{{ __('call_us') }}</h3>
                <p>+993 65 85-93-86<br></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>{{ __('email_us') }}</h3>
                <p>info@ajayyptilsimatlar.com<br>nariman@ajayyptilsimatlar.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>{{ __('open_hours') }}</h3>
                <p>09:00 - 18:00</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="#" method="post" class="php-email-form">
          {{-- <form action="forms/contact.php" method="post" class="php-email-form"> --}}
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder={{ __('your_name') }} required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder={{ __('your_email') }} required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder={{ __('subject') }} required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder={{ __('message') }}  required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">{{ __('loading') }}</div>
                <div class="error-message"></div>
                <div class="sent-message">{{ __('message_sent') }}</div>

                <button type="submit">{{ __('send_message') }}</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

</section>