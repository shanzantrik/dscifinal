<footer class="footer bg-dark-purple">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="engage-section mb-4">
          <h2>Engage with us using #FINSEC2025</h2>
          <p>Don't miss a thing! Follow our social channels and receive daily updates.</p>
          <div class="social-links">
            <a href="#" class="me-3"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="me-3"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            <a href="#" class="me-3"><i class="fab fa-youtube"></i> Youtube</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>

        <div class="map-section">
          <div class="hotel-info bg-white p-3 rounded mb-3">
            <h4 class="text-dark">The Westin Mumbai Powai Lake</h4>
            <p class="text-dark mb-1">2 & 3B, near Chinmayanand Ashram, Kailash Nagar, Mayur Nagar, Morarji Nagar,
              Powai, Mumbai, Maharashtra 400087</p>
            <div class="d-flex align-items-center mb-2">
              <div class="ratings">
                <span class="text-dark">4.5</span>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
              </div>
              <span class="text-secondary ms-2">3,784 reviews</span>
            </div>
            <a href="#" class="text-primary">View larger map</a>
            <div class="hotel-info-footer mt-3">
              <p class="text-dark">DSCI has negotiated special rates for our delegates and partners.</p>
              <p class="text-dark">Reach out to Saurabh Lal to reserve your stay.</p>
              <a href="#" class="btn btn-primary w-100">Room Reservation</a>
            </div>
          </div>
          <div class="map-container">
            <!-- Google Map will be embedded here -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3267243922964!2d72.90550731543552!3d19.133727287059277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f189efc039%3A0x9ebbdeaea9ec24ae!2sThe%20Westin%20Mumbai%20Powai%20Lake!5e0!3m2!1sen!2sin!4v1650000000000!5m2!1sen!2sin"
              width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="contact-card">
              <h3>For Sponsorship</h3>
              <div class="contact-person d-flex align-items-center">
                <div class="contact-img">
                  <img src="{{ asset('images/team/vibhor.jpg') }}" alt="Vibhor Wahi" class="rounded-circle" width="80">
                </div>
                <div class="contact-info ms-3">
                  <h5>Komal Wahi</h5>
                  <p class="mb-0">komal.wahi@dsci.in</p>
                  <p class="mb-0">(+91) 703 8 88810</p>
                  <a href="https://wa.me/917038888810" class="text-white">Whatsapp Me!</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="contact-card">
              <h3>For Registration and other queries</h3>
              <div class="contact-person d-flex align-items-center">
                <div class="contact-img">
                  <img src="{{ asset('images/team/saurabh.jpg') }}" alt="Saurabh Lal" class="rounded-circle" width="80">
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
        </div>

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
            <button type="submit" class="btn btn-warning text-white w-100">SEND MESSAGE</button>
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
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .footer h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 20px;
  }

  .social-links a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
  }

  .social-links a:hover {
    color: #d0f300;
  }

  .map-section {
    margin-top: 30px;
    position: relative;
  }

  .hotel-info {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .hotel-info h4 {
    font-size: 18px;
    font-weight: 600;
  }

  .hotel-info-footer {
    border-top: 1px solid #eee;
    padding-top: 15px;
  }

  .contact-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    height: 100%;
  }

  .contact-person img {
    border: 3px solid #fff;
  }

  .contact-form {
    margin-top: 30px;
  }

  .form-control {
    background-color: rgba(255, 255, 255, 0.9);
    border: none;
    padding: 12px 15px;
    color: #333;
  }

  .form-control::placeholder {
    color: #888;
  }

  .form-check-label {
    font-size: 14px;
  }

  .form-check-label a {
    color: #d0f300;
  }

  .btn-warning {
    background-color: #d0f300;
    border-color: #d0f300;
    font-weight: 600;
  }

  .bottom-bar {
    background-color: #14062D;
    padding: 20px 0;
    font-size: 14px;
  }

  .site-by a {
    color: #d0f300;
    text-decoration: none;
  }

  @media (max-width: 767px) {
    .footer {
      padding: 40px 0 0;
    }

    .contact-person {
      flex-direction: column;
      text-align: center;
    }

    .contact-info {
      margin-top: 15px;
      margin-left: 0 !important;
    }

    .bottom-bar .d-flex {
      flex-direction: column;
      text-align: center;
    }

    .bottom-bar .address,
    .bottom-bar .site-by {
      margin-top: 10px;
    }
  }
</style>
