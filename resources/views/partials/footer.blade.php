<footer class="footer bg-dark-purple">
  <div class="container">
    <!-- First Row - Engage Section -->
    <div class="row mb-5">
      <div class="col-12">
        <div class="engage-section">
          <h2>Engage with us using #FINSEC2025</h2>
          <h3>Don't miss a thing! Follow our social channels and receive daily updates.</h3>
          <div class="social-links">
            <a href="#" class="me-3"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="me-3"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            <a href="#" class="me-3"><i class="fab fa-youtube"></i> Youtube</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Row - Sponsorship and Contact Form -->
    <div class="row">
      <div class="col-md-4">
        <div class="contact-card">
          <h3>For Sponsorship</h3>
          <div class="contact-person d-flex align-items-center">
            <div class="contact-img">
              <img src="{{ asset('images/saurabh-lal.webp') }}" alt="Vibhor Wahi" class="rounded-circle" width="80">
            </div>
            <div class="contact-info ms-3">
              <h5>Komal Wahi</h5>
              <p class="mb-0">komal.wahi@dsci.in</p>
              <p class="mb-0">(+91) 703 8 88810</p>
              <a href="https://wa.me/917038888810" class="text-white">Whatsapp Me!</a>
            </div>
          </div>
        </div>

        <div class="contact-card mt-4">
          <h3>For Registration and other queries</h3>
          <div class="contact-person d-flex align-items-center">
            <div class="contact-img">
              <img src="{{ asset('images/saurabh-lal.webp') }}" alt="Saurabh Lal" class="rounded-circle" width="80">
            </div>
            <div class="contact-info ms-3">
              <h5>Saurabh Lal</h5>
              <p class="mb-0">saurabh.lal@dsci.in</p>
              <p class="mb-0">(+91) 99536 20404</p>
              <a href="https://wa.me/919953620404" class="text-white">Whatsapp Me!</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="contact-form">
          <h3>Have any questions, write to us</h3>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Name*" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="E-mail*" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Organization*" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" rows="4" placeholder="Message*" required></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="consentCheck" required>
              <label class="form-check-label" for="consentCheck">
                By submitting the form, you consent to us processing your data for a better user experience. Please read
                our
                <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> for more information.
              </label>
            </div>
            <button type="submit" class="button-footer w-100">SEND MESSAGE</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-bar mt-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <span class="copyright">© 2025 Data Security Council of India | All Rights Reserved.</span>
        {{-- <div class="address d-flex align-items-center">
          <img src="{{ asset('images/map-pin.png') }}" alt="Location" class="me-2" width="16">
          <span>POWAI LAKE, MUMBAI</span>
        </div> --}}
        <span class="site-by">Site created by <a href="https://oneimpact.co/" target="_blank">One Impact</a></span>
      </div>
    </div>
  </div>
</footer>

<style>
  .footer {
    background-color: #a56cff;
    color: #fff;
    padding: 60px 0 0;
  }

  .bg-dark-purple {
    background-color: #a56cff;
  }

  .footer h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .footer h3 {
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 25px;
  }

  .footer p {
    font-size: 18px;
    line-height: 1.6;
  }

  .social-links {
    margin-top: 25px;
  }

  .social-links a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
  }

  .social-links a:hover {
    color: #d0f300;
  }

  .contact-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 25px;
    height: auto;
  }

  .contact-person img {
    border: 3px solid #fff;
  }

  .contact-info h5 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .contact-info p {
    font-size: 16px;
  }

  .contact-form {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 30px;
  }

  .form-control {
    background-color: rgba(255, 255, 255, 0.9);
    border: none;
    padding: 15px 20px;
    color: #333;
    font-size: 16px;
    border-radius: 8px;
  }

  .form-control::placeholder {
    color: #888;
  }

  .form-check-label {
    font-size: 16px;
  }

  .form-check-label a {
    color: #d0f300;
  }

  .button-footer {
    background-color: #d0f300;
    color: #14062D;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .button-footer:hover {
    background-color: #c1e200;
    transform: translateY(-2px);
  }

  .bottom-bar {
    background-color: #14062D;
    padding: 20px 0;
    font-size: 16px;
  }

  .site-by a {
    color: #d0f300;
    text-decoration: none;
  }

  @media (max-width: 767px) {
    .footer {
      padding: 40px 0 0;
    }

    .footer h2 {
      font-size: 32px;
    }

    .footer h3 {
      font-size: 28px;
    }

    .contact-person {
      flex-direction: column;
      text-align: center;
    }

    .contact-info {
      margin-top: 15px;
      margin-left: 0 !important;
    }

    .contact-card {
      margin-bottom: 20px;
    }
  }
</style>
