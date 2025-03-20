<!-- Font Preload -->
<link rel="preload" href="{{ asset('fonts/SpaceGrotesk-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('fonts/SpaceGrotesk-Medium.woff2') }}" as="font" type="font/woff2" crossorigin>

<nav class="navbar brand-navbar" id="navbar">
  <div class="container">
    <!-- Logo - Left aligned -->
    <div class="logo">
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/dsci-logo-white.webp') }}" alt="DSCI" loading="lazy">
      </a>
    </div>

    <!-- Menu - Center aligned -->
    <div class="site-menu d-none d-lg-flex">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#keyhighlights">Key Highlights</a></li>
        <li><a href="#broadFocus">Broad Focus Areas</a></li>
        {{-- <li><a href="{{ route('speakers') }}">Speakers</a></li>
        <li><a href="#eventSchedule">Schedule</a></li>
        <li><a href="#sponsors">Sponsors</a></li>
        <li><a href="https://www.dsci.in/content/dsci-excellence-awards-2025" target="_blank">Excellence Awards</a>
        </li>
        --}}
        <li><a href="#footer">Contact</a></li>
      </ul>
    </div>

    <!-- Button - Right aligned -->
    <div class="navbar-button d-none d-lg-flex">
      <a href="#tickets" class="book-seat-btn">Register Now</a>
    </div>

    <!-- Mobile menu button -->
    <div class="hamburger-menu d-lg-none">
      <button class="menu" aria-label="Toggle Menu">
        <svg width="45" height="45" viewBox="0 0 100 100">
          <path class="line line1"
            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3"
            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu">
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#keyhighlights">Key Highlights</a></li>
      <li><a href="#broadFocus">Broad Focus Areas</a></li>
      <li><a href="#footer">Contact</a></li>
      <li><a href="#tickets" class="mobile-book-btn"> Register Now</a></li>
    </ul>
  </div>
</nav>

<style>
  /* Global Font Settings */
  :root {
    --font-primary: 'Space Grotesk', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  * {
    font-family: var(--font-primary);
  }

  @font-face {
    font-family: 'Space Grotesk';
    src: url('/fonts/SpaceGrotesk-Regular.woff2') format('woff2'),
      url('/fonts/SpaceGrotesk-Regular.woff') format('woff'),
      url('/fonts/SpaceGrotesk-Regular.ttf') format('truetype');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
  }

  @font-face {
    font-family: 'Space Grotesk';
    src: url('/fonts/SpaceGrotesk-Medium.woff2') format('woff2'),
      url('/fonts/SpaceGrotesk-Medium.woff') format('woff'),
      url('/fonts/SpaceGrotesk-Medium.ttf') format('truetype');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
  }

  /* Navbar Styles */
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
    transition: all 0.3s ease;
    background-color: transparent;
    height: 98px;
    /* Fixed height */
  }

  .navbar .container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 0px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
  }

  .navbar.brand-navbar {
    background-color: rgba(165, 108, 255, 0.95) !important;
  }

  .navbar.scrolled {
    background-color: rgba(165, 108, 255, 0.11) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
  }

  /* Logo Styles */
  .logo {
    flex: 0 0 auto;
  }

  .logo img {
    height: 45px;
    width: auto;
    transition: all 0.3s ease;
  }

  @media (min-width: 992px) {
    .logo img {
      height: 55px;
    }
  }

  /* Menu Styles */
  .site-menu {
    flex: 1;
    display: flex;
    justify-content: center;
  }

  .site-menu ul {
    display: flex;
    align-items: center;
    gap: 40px;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .site-menu ul li a {
    font-family: var(--font-primary);
    font-size: 18px !important;
    font-weight: 400;
    line-height: 100%;
    letter-spacing: 0;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    white-space: nowrap;
  }

  .site-menu ul li a:hover {
    color: #cff209;
  }

  /* Button Styles */
  .navbar-button {
    flex: 0 0 auto;
    margin-left: 40px;
  }

  .book-seat-btn {
    font-family: var(--font-primary);
    font-size: 18px;
    font-weight: 400;
    line-height: 100%;
    letter-spacing: 0;
    display: inline-block;
    padding: 12px 24px;
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
    border-radius: 30px;
    text-decoration: none;
    transition: all 0.3s ease;
    white-space: nowrap;
  }

  .book-seat-btn:hover {
    background-color: #fff;
    color: rgba(165, 108, 255, 1);
  }

  /* Mobile Menu Styles */
  .mobile-menu {
    display: none;
    position: fixed;
    top: 98px;
    /* Match navbar height */
    left: 0;
    right: 0;
    background-color: rgba(165, 108, 255, 0.98);
    padding: 20px 50px;
    /* Match navbar padding */
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
  }

  .mobile-menu.active {
    transform: translateX(0);
    display: block;
  }

  .mobile-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .mobile-menu ul li {
    margin: 15px 0;
  }

  .mobile-menu ul li a {
    font-family: var(--font-primary);
    font-size: 18px;
    font-weight: 400;
    line-height: 100%;
    letter-spacing: 0;
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px 16px;
  }

  .mobile-book-btn {
    font-family: var(--font-primary);
    font-size: 18px;
    font-weight: 400;
    line-height: 100%;
    letter-spacing: 0;
    display: inline-block;
    padding: 12px 24px;
    background-color: #fff;
    color: rgba(165, 108, 255, 1) !important;
    border-radius: 30px;
    margin-top: 15px;
  }

  /* Hamburger Menu */
  .hamburger-menu {
    display: none;
  }

  .hamburger-menu button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
  }

  .hamburger-menu .line {
    fill: none;
    stroke: #fff;
    stroke-width: 6;
    transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
      stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
  }

  .hamburger-menu .line1 {
    stroke-dasharray: 60 207;
    stroke-width: 6;
  }

  .hamburger-menu .line2 {
    stroke-dasharray: 60 60;
    stroke-width: 6;
  }

  .hamburger-menu .line3 {
    stroke-dasharray: 60 207;
    stroke-width: 6;
  }

  .hamburger-menu.active .line1 {
    stroke-dasharray: 90 207;
    stroke-dashoffset: -134;
    stroke-width: 6;
  }

  .hamburger-menu.active .line2 {
    stroke-dasharray: 1 60;
    stroke-dashoffset: -30;
    stroke-width: 6;
  }

  .hamburger-menu.active .line3 {
    stroke-dasharray: 90 207;
    stroke-dashoffset: -134;
    stroke-width: 6;
  }

  @media (max-width: 991px) {
    .navbar .container {
      padding: 0px 20px;
    }

    .hamburger-menu {
      margin-left: auto;
    }
  }

  @media (min-width: 1441px) {
    .navbar .container {
      margin: 0 auto;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.hamburger-menu');
  const mobileMenu = document.querySelector('.mobile-menu');
  const navbar = document.getElementById('navbar');

  hamburger.addEventListener('click', function() {
    this.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });

  // Close mobile menu when clicking on a link
  const mobileLinks = document.querySelectorAll('.mobile-menu a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    });
  });

  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
});
</script>
