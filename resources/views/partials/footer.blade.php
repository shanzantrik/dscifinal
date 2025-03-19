<footer class="footer bg-dark-purple">
  <div class="container">
    <div class="row align-items-center">
      <!-- Engage Section -->
      <div class="col-md-6">
        <div class="engage-section">
          <h2>Engage with us using #FINSEC2025</h2>
          <h3 class="sub-header">Don't miss a thing! Follow our social channels and receive daily updates.</h3>
          <div class="social-links">
            <a href="https://www.facebook.com/dsci.connect" class="me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/dsci_connect" class="me-3"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/data-security-council-of-india/posts/?feedView=all"
              class="me-3"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/user/dscivideo" class="me-3"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/dsci.connect/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Cards -->
      <div class="col-md-6">
        <div class="d-flex justify-content-end gap-4">
          <div class="contact-card">
            <h3>For Sponsorship</h3>
            <div class="contact-person d-flex align-items-center">
              <div class="contact-img">
                <img src="{{ asset('images/komal-sharma.png') }}" alt="Komal Sharma" class="rounded-circle" width="50">
              </div>
              <div class="contact-info ms-3">
                <h5>Komal Sharma</h5>
                <p class="mb-0">komal.sharma@dsci.in</p>
                <p class="mb-0">(+91) 98684 98416</p>
                <a href="https://wa.me/919868498416" target="_blank">Whatsapp Me!</a>
              </div>
            </div>
          </div>

          <div class="contact-card">
            <h3>For Registration & Queries</h3>
            <div class="contact-person d-flex align-items-center">
              <div class="contact-img">
                <img src="{{ asset('images/saurabh-lal.webp') }}" alt="Saurabh Lal" class="rounded-circle" width="50">
              </div>
              <div class="contact-info ms-3">
                <h5>Saurabh Lal</h5>
                <p class="mb-0">saurabh.lal@dsci.in</p>
                <p class="mb-0">(+91) 99536 20404</p>
                <a href="https://wa.me/919953620404" target="_blank">Whatsapp Me!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-bar mt-4">
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

  <!-- Scroll to top button -->
  <button id="scrollToTop" class="scroll-to-top" aria-label="Scroll to top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
</footer>

<style>
  .footer {
    background-color: #a56cff;
    color: #fff;
    padding: 30px 0 0;
    font-family: 'Space Grotesk', sans-serif;
  }

  .footer * {
    font-family: 'Space Grotesk', sans-serif;
  }

  .bg-dark-purple {
    background-color: #a56cff;
  }

  .footer h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .footer h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .footer p {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 14px;
    line-height: 1.4;
  }

  .social-links {
    margin-top: 15px;
  }

  .social-links a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    transition: color 0.3s ease;
  }

  .social-links a:hover {
    color: #d0f300;
  }

  .contact-card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 15px;
    min-width: 250px;
  }

  .contact-person {
    display: flex;
    align-items: center;
  }

  .contact-img img {
    border: 2px solid #fff;
    width: 50px;
    height: 50px;
    object-fit: cover;
  }

  .contact-info {
    margin-left: 12px;
  }

  .contact-info h5 {
    font-size: 16px;
    margin-bottom: 5px;
  }

  .contact-info p {
    font-size: 14px;
  }

  .bottom-bar {
    background-color: #14062D;
    padding: 15px 0;
    font-size: 14px;
  }

  .sub-header {
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 15px;
    opacity: 0.9;
  }

  @media (max-width: 767px) {
    .footer {
      padding: 20px 0 0;
    }

    .footer h2 {
      font-size: 20px;
    }

    .footer h3 {
      font-size: 16px;
    }

    .sub-header {
      font-size: 14px;
    }

    .contact-card {
      min-width: 100%;
    }

    .contact-img img {
      width: 40px;
      height: 40px;
    }

    .contact-person {
      flex-direction: row;
    }

    .contact-info {
      margin-left: 10px;
    }

    .d-flex.justify-content-end {
      justify-content: flex-start !important;
      flex-direction: column;
    }

    .gap-4 {
      gap: 1rem !important;
    }
  }

  .scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background-color: #A56CFF;
    color: #fff;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 1000;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  .scroll-to-top:hover {
    background-color: #733be2;
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
  }

  .scroll-to-top.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .scroll-to-top i {
    font-size: 20px;
  }

  @media (max-width: 767px) {
    .scroll-to-top {
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
    }

    .scroll-to-top i {
      font-size: 16px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');

    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });

    // Smooth scroll to top when clicked
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
