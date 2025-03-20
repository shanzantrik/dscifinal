@extends('layouts.app')

@section('title', 'AISS 2025 | Annual Information Security Summit 2025 | DSCI')

@section('content')
<!-- Add Space Grotesk font -->
<link rel="stylesheet" href="{{ asset('css/lib/space-grotesk.css') }}">
<!-- Add Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
  /* Global font styles - Consolidated */
  :root {
    --font-family-base: 'Space Grotesk', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  /* Apply Space Grotesk globally with high specificity */
  html,
  body {
    font-family: var(--font-family-base) !important;
  }

  /* Apply to all text elements with high specificity */
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  span,
  a,
  button,
  input,
  textarea,
  select,
  .navbar,
  .site-menu,
  .mobile-menu,
  .event-bottom-panel,
  .btn,
  .dropbtn,
  .info-label,
  .info-value,
  .hashtag,
  .about-content,
  .speaker-info,
  .timeline-content,
  .view-all-btn,
  .stat-number,
  .stat-label,
  .highlight-subtitle,
  .section-title,
  .section-subtitle,
  .card-title,
  .card-text,
  .nav-link,
  .dropdown-item,
  .form-label,
  .form-control,
  .focus-title,
  .ticket-type,
  .faq-button {
    font-family: var(--font-family-base) !important;
  }

  /* Ensure font weights are correctly applied */
  .font-light {
    font-weight: 300 !important;
  }

  .font-regular {
    font-weight: 400 !important;
  }

  .font-medium {
    font-weight: 500 !important;
  }

  .font-bold {
    font-weight: 700 !important;
  }

  /* Font smoothing for better rendering */
  * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility;
  }

  /* Exclude Font Awesome and other icon fonts */
  i[class^="fa-"],
  i[class*=" fa-"],
  .fa,
  .fab,
  .fas,
  .far {
    font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
  }

  body {
    font-family: var(--font-family-base);
  }

  /* Apply Space Grotesk to all text elements */
  *:not(i):not(.fa):not(.fab):not(.fas):not(.far) {
    font-family: var(--font-family-base);
  }

  /* Specific element styles */
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  span,
  a,
  button,
  input,
  textarea,
  select,
  .navbar,
  .site-menu,
  .mobile-menu,
  .event-bottom-panel,
  .btn,
  .dropbtn,
  .info-label,
  .info-value,
  .hashtag,
  .about-content,
  .speaker-info,
  .timeline-content,
  .view-all-btn,
  .stat-number,
  .stat-label,
  .highlight-subtitle,
  .section-title,
  .section-subtitle,
  .card-title,
  .card-text,
  .nav-link,
  .dropdown-item,
  .form-label,
  .form-control {
    font-family: var(--font-family-base);
  }

  /* Hero Section Styles */
  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background-color: #05102D;
  }

  /* Ensure video covers the entire section */
  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
  }

  .video-background video {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    object-fit: cover;
  }

  /* Add fallback styles in case video fails to load */
  .hero-section.video-fallback {
    background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
  }

  /* Responsive adjustments */
  @media (max-width: 991px) {
    .hero-section {
      height: 80vh;
    }
  }

  @media (max-width: 767px) {
    .hero-section {
      height: 70vh;
    }
  }

  @media (max-aspect-ratio: 16/9) {
    .video-background video {
      width: 100%;
      height: auto;
    }
  }

  @media (max-aspect-ratio: 9/16) {
    .video-background video {
      width: auto;
      height: 100%;
    }
  }

  @media (max-width: 480px) {
    .hero-section {
      height: 60vh;
    }
  }

  /* iOS specific fix for video sizing */
  @supports (-webkit-touch-callout: none) {
    .video-background video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      transform: none;
    }
  }

  /* Remove any background colors */
  .content-section {
    position: relative;
    z-index: 3;
  }

  /* Ensure navbar stays on top */
  .navbar {
    position: fixed;
    z-index: 1040;
  }

  /* Ensure mobile menu stays on top */
  .mobile-menu {
    position: fixed;
    z-index: 1050;
  }

  /* Event bottom panel should stay on top */
  .event-bottom-panel {
    position: fixed;
    z-index: 1030;
  }

  /* Key Highlights Statistics Styles */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    margin-top: 2rem;
  }

  .stat-item {
    text-align: center;
  }

  .stat-number {
    font-family: var(--font-family-base);
    font-size: 3.5rem;
    font-weight: 700;
    color: #A56CFF;
    margin-bottom: 0.5rem;
    line-height: 1;
  }

  .plus {
    font-size: 2.5rem;
    vertical-align: super;
  }

  .stat-label {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1rem;
    color: #666;
    margin: 0;
    line-height: 1.4;
  }

  .highlight-subtitle {
    color: #666;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
  }

  @media (max-width: 768px) {
    .stats-grid {
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    .stat-number {
      font-size: 3rem;
    }

    .plus {
      font-size: 2rem;
    }

    .stat-label {
      font-size: 0.9rem;
    }
  }



  .image-wrapper {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .main-image {
    height: 618px;
  }

  .secondary-image {
    width: 100%;
    height: 478px;
  }

  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .image-wrapper:hover img {
    transform: scale(1.05);
  }

  .diagonal-images-wrapper:hover img {
    transform: scale(1.05);
  }

  @media (max-width: 991px) {
    .about-title {
      font-size: 36px;
    }

    .about-content {
      margin-bottom: 40px;
    }

    .main-image {
      height: 250px;
    }

    .secondary-image {
      height: 180px;
    }
  }

  @media (max-width: 767px) {
    .about-title {
      font-size: 32px;
    }

    .about-buttons {
      flex-direction: column;
    }

    .btn-read-more,
    .btn-report {
      width: 100%;
      text-align: center;
    }

    .main-image,
    .secondary-image {
      height: 200px;
    }
  }

  /* Speakers Section Styles */
  .speakers-slider {
    padding: 20px 0;
    margin: 0 -15px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .speakers-slider.slick-initialized {
    opacity: 1;
  }

  .slick-slide {
    padding: 0 15px;
  }

  .slick-dots {
    bottom: -30px;
  }

  .slick-dots li button:before {
    font-size: 12px;
    color: #01B380;
    opacity: 0.3;
  }

  .slick-dots li.slick-active button:before {
    opacity: 1;
    color: #01B380;
  }

  .slick-prev,
  .slick-next {
    width: 40px;
    height: 40px;
    background: #01B380;
    border-radius: 50%;
    z-index: 1;
  }

  .slick-prev:before,
  .slick-next:before {
    font-size: 20px;
  }

  .slick-prev:hover,
  .slick-next:hover {
    background: #05102d;
  }

  @media (max-width: 991px) {
    .slick-prev {
      left: -20px;
    }

    .slick-next {
      right: -20px;
    }
  }

  /* Event Schedule Styles */
  .schedule-timeline {
    padding: 30px 0;
  }

  .timeline-item {
    display: flex;
    margin-bottom: 30px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    overflow: hidden;
  }

  .timeline-time {
    font-family: var(--font-family-base);
    padding: 20px;
    background: rgba(1, 179, 128, 0.1);
    color: #01B380;
    font-weight: 600;
    min-width: 200px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .timeline-content {
    padding: 20px;
    flex-grow: 1;
  }

  .timeline-content h3 {
    font-family: var(--font-family-base);
    color: #ffffff;
    margin-bottom: 10px;
    font-size: 20px;
  }

  .timeline-content p {
    font-family: var(--font-family-base);
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 15px;
  }

  .event-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }

  .event-meta span {
    font-family: var(--font-family-base);
    color: rgba(255, 255, 255, 0.9);
    font-size: 14px;
  }

  .event-meta i {
    color: #01B380;
    margin-right: 5px;
  }

  .speakers-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .speaker-item {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.05);
    padding: 10px;
    border-radius: 8px;
  }

  .speaker-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
  }

  .speaker-info h4 {
    font-family: var(--font-family-base);
    color: #ffffff;
    font-size: 16px;
    margin: 0;
  }

  .speaker-info .role {
    font-family: var(--font-family-base);
    color: #01B380;
    font-size: 12px;
    display: block;
  }

  .speaker-info p {
    font-family: var(--font-family-base);
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    margin: 0;
  }

  .tablink {
    font-family: var(--font-family-base);
    cursor: pointer;
    padding: 20px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
  }

  .tablink.active {
    background: #01B380;
  }

  .tabcontent {
    display: none;
    padding: 30px 0;
  }

  .tabcontent.show {
    display: block;
  }

  @media (max-width: 768px) {
    .timeline-item {
      flex-direction: column;
    }

    .timeline-time {
      width: 100%;
      min-width: auto;
    }

    .speakers-list {
      gap: 10px;
    }

    .speaker-item {
      width: 100%;
    }
  }

  /* Updated Callout Section Styles */
  .callout-section {
    padding: 0;
    /* Removed padding to allow full-width */
    background: #ffffff;
    min-height: 100vh;
    /* Full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    /* Prevent any potential overflow */
  }

  .callout-section .container {
    padding: 0;
    /* Remove container padding */
    max-width: 100%;
    /* Allow container to be full width */
    width: 100%;
  }

  .callout-image-wrapper {
    width: 100%;
    height: 100vh;
    /* Full viewport height */
    position: relative;
  }

  .callout-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
  }

  .callout-image-wrapper:hover a {
    /* transform: scale(1.02); */
    /* Subtle zoom effect on hover */
  }

  .callout-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Maintain aspect ratio while covering full area */
    border-radius: 0;
    /* Remove border radius for full-screen effect */
    box-shadow: none;
    /* Remove shadow for full-screen effect */
  }

  /* Responsive Styles */
  @media (max-width: 1200px) {
    .callout-section {
      min-height: auto;
    }

    .callout-image-wrapper {
      height: auto;
      max-width: 90%;
      margin: 40px auto;
    }

    .callout-image {
      border-radius: 20px;
      /* Restore border radius for smaller screens */
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      /* Restore shadow for smaller screens */
    }
  }

  @media (max-width: 768px) {
    .callout-image-wrapper {
      max-width: 95%;
      margin: 30px auto;
    }
  }

  @media (max-width: 480px) {
    .callout-image-wrapper {
      margin: 20px auto;
    }
  }

  /* Add these styles in the CSS section */
  .message-with-image {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
  }

  .message-content {
    flex: 1;
  }

  .floating-image {
    position: relative;
    animation: float 3s ease-in-out infinite;
    flex-shrink: 0;
    margin-right: -20px;
  }

  .floating-speaker-img {
    width: 100%;
    max-width: 320px;
    height: auto;
    display: block;
  }

  @keyframes float {
    0% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-15px);
    }

    100% {
      transform: translateY(0px);
    }
  }

  @media (max-width: 991px) {
    .message-with-image {
      flex-direction: column;
      gap: 20px;
    }

    .floating-image {
      margin-right: 0;
      margin-top: 20px;
    }

    .floating-speaker-img {
      max-width: 280px;
      margin: 0 auto;
    }
  }

  /* City Skyline Section Styles */
  .city-skyline-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background: #ffffff;
  }

  .city-content {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .text-overlay {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 10%;
    z-index: 1;
  }

  .event-date-top {
    font-size: clamp(1.5rem, 3vw, 2.5rem);
    background: linear-gradient(45deg, #472E56, #9B65BC);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    margin-top: 3%;
    transform: translateY(-20px);
    opacity: 0;
    animation: fadeInDate 1s ease-out forwards;
  }

  .city-name {
    font-size: clamp(8rem, 15vw, 20rem);
    color: #ffffff;
    -webkit-text-stroke: 2px #A56CFF;
    text-stroke: 2px #A56CFF;
    font-weight: 800;
    text-transform: none;
    letter-spacing: -2px;
    opacity: 0;
    transform: translateY(20%);
    animation: sunriseText 5s ease-out forwards;
    position: absolute;
    bottom: 10%;
    left: 5%;
    width: 90%;
    text-align: center;
  }

  .city-image-container {
    position: absolute;
    top: 135px;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
  }

  .city-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    animation: fadeInImage 2s ease-out forwards;
  }

  @keyframes sunriseText {
    0% {
      opacity: 1;
      transform: translateY(100%);
    }

    30% {
      opacity: 1;
      transform: translateY(80%);
    }

    60% {
      opacity: 1;
      transform: translateY(60%);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInDate {
    0% {
      opacity: 1;
      transform: translateY(-10px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInImage {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .city-skyline-section {
      height: 70vh;
    }

    .event-date-top {
      margin-top: 20%;
    }

    .city-name {
      font-size: clamp(4rem, 10vw, 15rem);
      bottom: 35%;
    }
  }

  @media (max-width: 480px) {
    .city-skyline-section {
      height: 50vh;
    }

    .event-date-top {
      font-size: 1.25rem;
      margin-top: 25%;
    }

    .city-name {
      font-size: clamp(3rem, 8vw, 10rem);
      bottom: 20%;
    }
  }

  /* Focus Section Styles */
  .focus-section {
    padding: 100px 0;
    position: relative;
    background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
    background-size: 100% 50%;
    background-repeat: no-repeat;
    background-position: top;
    overflow: hidden;
  }

  .section-subtitle {
    color: #A56CFF;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .section-title {
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 50px;
  }

  /* Dotted Background Animation */
  .dotted-bg-animation {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.15;
  }

  .dot-container {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle, #A56CFF 1px, transparent 1px);
    background-size: 30px 30px;
    animation: moveBackground 20s linear infinite;
  }

  @keyframes moveBackground {
    0% {
      background-position: 0 0;
    }

    100% {
      background-position: 100px 100px;
    }
  }

  /* Focus Cards Carousel */
  .focus-carousel-container {
    padding: 20px 0 60px;
    overflow: hidden;
    width: 100%;
    max-width: 960px;
    /* Accommodates main card (495px) + gap (45px) + part of smaller card (330px) */
    margin: 0 auto;
    position: relative;
  }

  .focus-carousel {
    display: flex;
    position: relative;
    transition: transform 0.5s ease-in-out;
    gap: 45px;
    will-change: transform;
    padding: 20px 0;
  }

  .focus-card {
    flex: 0 0 495px;
    height: 298.5px;
    border-radius: 30px;
    padding: 45px 75px;
    border: 2px solid #76FF03;
    background: #ffffff;
    backdrop-filter: blur(2px);
    transition: all 0.5s ease-in-out;
    transform: scale(0.67);
    /* Scale for inactive smaller cards (330/495 = ~0.67) */
    opacity: 0.5;
  }

  .focus-card.active {
    transform: scale(1);
    opacity: 1;
  }

  .focus-card-inner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .carousel-prev,
  .carousel-next {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    opacity: 0.7;
  }

  .carousel-prev {
    left: -60px;
  }

  .carousel-next {
    right: -60px;
  }

  .carousel-prev:enabled,
  .carousel-next:enabled {
    opacity: 0.3;
    cursor: not-allowed;
    background: #A56CFF;
  }

  .carousel-prev:not(:enabled):hover,
  .carousel-next:not(:enabled):hover {
    background: #A56CFF;
    transform: translateY(-50%) scale(1.1);
    opacity: 1;
  }

  .carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 30px;
  }

  .carousel-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #A56CFF;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .carousel-dot.active {
    background: #A56CFF;
    transform: scale(1.2);
  }

  .carousel-dot:hover {
    background: rgba(165, 108, 255, 0.5);
  }

  .focus-icon {
    width: 70px;
    min-width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #A56CFF;
    border-radius: 14px;
    padding: 15px;
    margin-bottom: 20px;
  }

  .focus-icon img {
    width: 100%;
    height: auto;
    filter: brightness(0) invert(1);
  }

  .focus-content {
    width: 100%;
    text-align: center;
  }

  /* Responsive adjustments */
  @media (max-width: 991px) {
    .focus-carousel-container {
      max-width: 650px;
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }
  }

  @media (max-width: 767px) {
    .focus-carousel-container {
      max-width: 480px;
    }

    .focus-card {
      flex: 0 0 350px;
      height: 212px;
      padding: 30px 50px;
    }
  }

  @media (max-width: 480px) {
    .focus-carousel-container {
      max-width: 340px;
    }

    .focus-card {
      flex: 0 0 300px;
      height: 182px;
      padding: 25px 40px;
    }
  }

  /* Updated Tickets Section Styles */
  .tickets-section {
    padding: 100px 0;
    background: #ffffff;
  }

  .section-headers {
    text-align: left;
  }

  .section-subtitle {
    color: #A56CFF;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .section-title {
    font-size: 42px;
    font-weight: 700;
    color: #05102D;
    margin-bottom: 50px;
  }

  .tickets-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 50px;
  }

  .ticket-card {
    position: relative;
    width: 100%;
    height: 450px;
    /* Fixed height for the container */
    padding: 0;
    margin-bottom: 40px;
  }

  .ticket-card-membership {
    position: relative;
    width: 100%;
    height: 450px;
  }

  .ticket-card-membership::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("{!! asset('images/ticket-card-mem.webp') !!}") no-repeat center center;
    background-size: cover;
    z-index: 1;
    border-radius: 25px;
  }

  .ticket-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("{!! asset('images/ticket_bg.png') !!}") no-repeat center center;
    background-size: cover;
    z-index: 1;
    border-radius: 25px;
  }

  .ticket-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    padding: 30px;
    z-index: 2;
    transition: all 0.3s ease;
    color: #01050e;
  }

  .ticket-card.featured .ticket-content {
    border-color: #A56CFF;
  }

  .ticket-card:hover .ticket-content {
    transform: translate(-50%, -52%);
  }

  .ticket-header {
    text-align: center;
    margin-bottom: 20px;
  }

  .ticket-type {
    font-size: 20px;
    font-weight: 700;
    color: #05102D;
    margin-bottom: 10px;
  }

  .ticket-price {
    display: flex;
    align-items: baseline;
    justify-content: left;
    gap: 5px;
  }

  .currency {
    font-size: 20px;
    font-weight: 600;
    color: #A56CFF;
  }

  .amount {
    font-size: 36px;
    font-weight: 800;
    color: #A56CFF;
    line-height: 1;
  }

  .duration {
    font-size: 14px;
    color: #666;
  }

  .ticket-features {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .ticket-features li {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    color: #05102D;
    font-size: 14px;
  }

  .ticket-features li i {
    color: #A56CFF;
    font-size: 12px;
  }

  .btn-get-pass {
    display: inline-block;
    background: #A56CFF;
    color: #ffffff;
    padding: 10px 30px;
    border-radius: 25px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 14px;
    z-index: 3;
  }

  .btn-get-pass:hover {
    background: #8A4FFF;
    color: #ffffff;
    transform: translateX(-50%) translateY(-2px);
  }

  @media (max-width: 1200px) {
    .tickets-grid {
      gap: 20px;
    }

    .ticket-card {
      height: 400px;
    }

    .ticket-content {
      width: 85%;
      padding: 25px;
    }
  }

  @media (max-width: 991px) {
    .tickets-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .ticket-card {
      height: 380px;
    }
  }

  @media (max-width: 767px) {
    .tickets-section {
      padding: 60px 0;
    }

    .tickets-grid {
      grid-template-columns: 1fr;
    }

    .ticket-card {
      height: 350px;
    }

    .ticket-content {
      width: 90%;
      padding: 20px;
    }

    .amount {
      font-size: 32px;
    }

    .section-title {
      font-size: 32px;
    }
  }

  /* Speakers Section Styles */
  .speakers-slider {
    padding: 20px 0;
    margin: 0 -15px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .speakers-slider.slick-initialized {
    opacity: 1;
  }

  .speaker-item {
    padding: 0 11.5px;
    /* Half of the gap (23px) */
  }

  .speaker-image {
    width: 315px;
    height: 367px;
    overflow: hidden;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .speaker-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .search-input {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid #e0e0e0;
    border-radius: 25px;
    background-color: #f5f5f5;
    color: #333;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .search-input:focus {
    outline: none;
    border-color: #01B380;
    box-shadow: 0 0 0 2px rgba(1, 179, 128, 0.1);
  }

  .search-input::placeholder {
    color: #999;
  }

  @media (max-width: 991px) {
    .speaker-image {
      width: 200px;
      height: 320px;
    }
  }

  @media (max-width: 767px) {
    .speaker-image {
      width: 180px;
      height: 288px;
    }
  }

  .btn-primary {
    background-color: #01B380;
    border-color: #01B380;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #019e70;
    border-color: #019e70;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(1, 179, 128, 0.3);
  }

  .btn-lg {
    font-size: 16px;
  }

  .btn i {
    transition: transform 0.3s ease;
  }

  .btn:hover i {
    transform: translateX(5px);
  }


  /* Responsive Styles */
  @media (max-width: 991px) {
    .stats-content {
      margin-top: 30px;
      text-align: center;
    }
  }

  @media (min-width: 992px) and (max-width: 1200px) {}

  /* Stats Grid Responsive Styles */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .stat-item {
    text-align: center;
  }

  @media (max-width: 767px) {
    .stats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  /* Callout Section Styles */
  .callout-section {
    padding: 0;
    /* Removed padding to allow full-width */
    background: #ffffff;
    min-height: 100vh;
    /* Full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    /* Prevent any potential overflow */
  }

  .callout-section .container {
    padding: 0;
    /* Remove container padding */
    max-width: 100%;
    /* Allow container to be full width */
    width: 100%;
  }

  .callout-image-wrapper {
    width: 100%;
    height: 100vh;
    /* Full viewport height */
    position: relative;
  }

  .callout-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
  }

  .callout-image-wrapper:hover a {
    transform: scale(1.02);
    /* Subtle zoom effect on hover */
  }

  .callout-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Maintain aspect ratio while covering full area */
    border-radius: 0;
    /* Remove border radius for full-screen effect */
    box-shadow: none;
    /* Remove shadow for full-screen effect */
  }

  /* Responsive Styles */
  @media (max-width: 1200px) {
    .callout-section {
      min-height: auto;
    }

    .callout-image-wrapper {
      height: auto;
      max-width: 90%;
      margin: 40px auto;
    }

    .callout-image {
      border-radius: 20px;
      /* Restore border radius for smaller screens */
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      /* Restore shadow for smaller screens */
    }
  }

  @media (max-width: 768px) {
    .callout-image-wrapper {
      max-width: 95%;
      margin: 30px auto;
    }
  }

  @media (max-width: 480px) {
    .callout-image-wrapper {
      margin: 20px auto;
    }
  }

  .text-tickets {
    color: #A56CFF;
  }

  /* FAQ Section Styles */
  .faq-section {
    padding: 100px 0;
    background-color: #ffffff;
  }

  .section-small-title {
    font-size: 20px;
    font-weight: 600;
    color: #A56CFF;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .section-title {
    font-size: 64px;
    font-weight: 700;
    color: #000000;
    margin-bottom: 50px;
  }

  .faq-item {
    margin-bottom: 16px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .faq-header {
    width: 100%;
  }

  .faq-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 20px 30px;
    background-color: #A56CFF;
    border: 2px solid #F0F0F0;
    border-radius: 12px;
    text-align: left;
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .faq-button:hover,
  .faq-button:focus {
    background-color: #cff300;
    border-color: #A56CFF;
    color: #A56CFF;
    outline: none;
  }

  .faq-button:not(.collapsed) {
    background-color: #cff300;
    border-color: #A56CFF;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    color: #A56CFF;
  }

  .faq-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 24px;
    height: 24px;
    margin-left: 15px;
    border-radius: 50%;
    color: #ffffff;
  }

  .faq-icon .fa-minus {
    display: none;
  }

  .faq-button:not(.collapsed) .fa-plus {
    display: none;
    color: #A56CFF;
  }

  .faq-button:not(.collapsed) .fa-minus {
    display: inline-block;
  }

  .faq-body {
    padding: 20px 30px;
    background-color: #ffffff;
    border: 2px solid #A56CFF;
    border-top: none;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    color: #555555;
    font-size: 16px;
    line-height: 1.6;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .faq-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .faq-button {
      padding: 15px 20px;
      font-size: 16px;
    }

    .faq-body {
      padding: 15px 20px;
    }
  }

  .focus-title {
    font-size: 36px;
    font-weight: 700;
    color: #A56CFF;
    text-align: center;
  }

  .focus-description {
    display: none;
  }

  /* Updated responsive adjustments */
  @media (max-width: 991px) {
    .focus-carousel-container {
      max-width: 650px;
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }

    .focus-title {
      font-size: 32px;
    }

    .carousel-prev {
      left: -40px;
    }

    .carousel-next {
      right: -40px;
    }
  }

  @media (max-width: 767px) {
    .focus-carousel-container {
      max-width: 480px;
    }

    .focus-card {
      flex: 0 0 350px;
      height: 212px;
      padding: 30px 50px;
    }

    .focus-title {
      font-size: 30px;
    }

    .carousel-prev {
      left: -30px;
      width: 40px;
      height: 40px;
    }

    .carousel-next {
      right: -30px;
      width: 40px;
      height: 40px;
    }

    .bf-title {
      font-size: 60px;
      line-height: 70px;
    }
  }

  @media (max-width: 480px) {
    .focus-carousel-container {
      max-width: 300px;
      /* Show just the main card on mobile */
    }

    .focus-card {
      flex: 0 0 280px;
      height: 170px;
      padding: 20px 30px;
    }

    .focus-title {
      font-size: 24px;
    }

    .focus-icon {
      width: 50px;
      min-width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }

    .carousel-prev {
      left: -25px;
      width: 36px;
      height: 36px;
    }

    .carousel-next {
      right: -25px;
      width: 36px;
      height: 36px;
    }

    .bf-title {
      font-size: 42px;
      line-height: 50px;
    }
  }

  /* Ensure consistent font weights across the site */
  .text-light {
    font-weight: 300;
  }

  .text-regular {
    font-weight: 400;
  }

  .text-medium {
    font-weight: 500;
  }

  .text-bold {
    font-weight: 700;
  }

  /* Add font smoothing for better rendering */
  * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .coin-container {
    width: 250px;
    height: 250px;
    position: relative;
    perspective: 1000px;
    overflow: hidden;
  }

  .coin {
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: spin 2s linear infinite;
  }

  .coin::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.8) 50%,
        rgba(255, 255, 255, 0) 100%);
    transform: rotate(25deg);
    animation: glare 4s infinite;
  }

  @keyframes glare {
    0% {
      transform: translate(-100%, -100%) rotate(25deg);
    }

    20%,
    100% {
      transform: translate(100%, 100%) rotate(25deg);
    }
  }

  @keyframes spin {
    0% {
      transform: rotateY(0deg);
    }

    100% {
      transform: rotateY(360deg);
    }
  }

  .side {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 80px;
    font-weight: bold;
    color: #7040c0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    border: 5px solid #7040c0;
    padding: 10px;
  }

  .front {
    transform: translateZ(10px);
  }

  .back {
    transform: rotateY(180deg) translateZ(10px);
  }

  .edge {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    left: 0;
    transform: translateY(-50%) rotateX(90deg);
    border-radius: 50%;
  }

  .fill-gap {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    transform: translateY(-50%) rotateX(90deg);
  }

  .navigation-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
  }

  .nav-arrow {
    background: transparent;
    border: none;
    color: #8B5CF6;
    font-size: 24px;
    cursor: pointer;
    padding: 10px;
    transition: transform 0.3s ease;
  }

  .nav-arrow:hover {
    transform: scale(1.2);
  }

  .nav-arrow:disabled {
    color: #ccc;
    cursor: not-allowed;
  }

  .dots-container {
    display: flex;
    gap: 8px;
    align-items: center;
  }

  .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #D1D5DB;
    transition: background-color 0.3s ease;
  }

  .dot.active {
    background-color: #8B5CF6;
    width: 10px;
    height: 10px;
  }
</style>

<!-- Navbar -->
@include('partials.navbar')

<div class="smooth-scroll">
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="video-background">
      <video autoplay muted loop playsinline id="hero-video">
        <source src="{{ asset('videos/header.mp4') }}" type="video/mp4">
        Your browser does not support the video tag or the video file is not found.
      </video>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const video = document.getElementById('hero-video');
      const heroSection = document.querySelector('.hero-section');

      // Function to handle video sizing
      function resizeVideo() {
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;
        const windowAspect = windowWidth / windowHeight;

        // Get video's native aspect ratio once metadata is loaded
        if (video.videoWidth && video.videoHeight) {
          const videoAspect = video.videoWidth / video.videoHeight;

          if (windowAspect > videoAspect) {
            // Window is wider than video
            video.style.width = '100%';
            video.style.height = 'auto';
          } else {
            // Window is taller than video
            video.style.width = 'auto';
            video.style.height = '100%';
          }
        }
      }

      // Call on page load and whenever video metadata loads
      video.addEventListener('loadedmetadata', resizeVideo);
      window.addEventListener('resize', resizeVideo);

      // Error handling for video
      video.addEventListener('error', function(e) {
          console.error('Error loading video:', e);
          // Add a CSS class to maintain the section's appearance even if video fails to load
          heroSection.classList.add('video-fallback');
      });

      // For mobile devices, consider pausing video when not in viewport to save battery
      if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              if (video.paused) video.play();
            } else {
              if (!video.paused) video.pause();
            }
          });
        }, { threshold: 0.1 });

        observer.observe(video);
      }
    });
  </script>

  <style>
    /* Hero Section Styles */
    .hero-section {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
      background-color: #05102D;
      /* Fallback color */
    }

    /* Ensure video covers the entire section */
    .video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .video-background video {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      object-fit: cover;
    }

    /* Add fallback styles in case video fails to load */
    .hero-section.video-fallback {
      background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
      .hero-section {
        height: 80vh;
      }
    }

    @media (max-width: 767px) {
      .hero-section {
        height: 70vh;
      }
    }

    @media (max-aspect-ratio: 16/9) {
      .video-background video {
        width: 100%;
        height: auto;
      }
    }

    @media (max-aspect-ratio: 9/16) {
      .video-background video {
        width: auto;
        height: 100%;
      }
    }

    @media (max-width: 480px) {
      .hero-section {
        height: 60vh;
      }
    }

    /* iOS specific fix for video sizing */
    @supports (-webkit-touch-callout: none) {
      .video-background video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        transform: none;
      }
    }
  </style>

  <!-- About Section -->
  <section class="content-section bg-white" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="about-content">
            <h6 class="about-subtitle">ABOUT US</h6>
            <h2 class="about-title" style="text-align: left !important;">
              Financial <span class="highlight">Security</span><br>
              Conclave 2025
            </h2>
            <div class="about-text" style="text-align: left !important;">
              <div class="initial-content">
                <p>The seventh edition of the DSCI FINSEC Conclave is all set to be the perfect congregation
                  of policy, finance, and security spheres. This year&#39;s conclave will bring together the
                  expertise, experience, and foresight of leaders, practitioners, policymakers, researchers,
                  developers, and innovators to address the evolving challenges and opportunities in financial
                  security and privacy. As cyber risks continue to evolve, organizations are enhancing their
                  defence strategies with cutting-edge security measures.</p>

                <p>Finsec 2025 will delve into pressing themes such as includes Transaction Security, Payment
                  Innovation, LLM Ops, Quantum Blueprint, Resilient Financial Infrastructure, PrivacyOps,
                  Next-Gen Digital Crime, Supervisory Technology and Compliance, ESG Integration, and
                  Multi-Cloud Security Architecture.</p>
              </div>

              <div class="expanded-content" style="display: none;">
                <p>Through insightful sessions, roundtables, workshops, exhibitions, and much more, Finsec
                  2025 will be an immersive discovery and dialogue of the future trajectories of financial
                  services and the overarching digital transformation reshaping global economies.
                  We are excited to convene banks, neo-banks, insurers, securities firms, banking financial
                  entities, cooperatives, and fintech companies for immersive dialogues, knowledge-sharing
                  sessions, and deliberations. With the country making significant strides in comprehensive
                  data privacy legislation, the focus on preparedness and implementation aspects of privacy
                  will be a core area for financial services organizations this year. Finsec 2025 will emphasize
                  the implementation challenges in data governance, data protection, and data management.</p>
                <p>The summit will provide a comprehensive perspective on the current cybersecurity
                  landscape of the country&#39;s BFSI sector, highlighting the technological advancements driving
                  digitization and the associated security and privacy concerns and opportunities.</p>
                <p>Join us at Finsec 2025 to engage with industry leaders, share insights, and shape the future
                  of financial security.</p>
              </div>
            </div>
            <div class="about-buttons">
              <button class="btn btn-read-more" onclick="toggleContent()">Read More</button>
              <a href="#" class="btn btn-report">FINSEC'24 Report</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about-image-grid">
            <div class="coin-container">
              <img class="coin" src="{{ asset('images/Coin.png') }}" alt="Coin">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container diagonal-images-container">
  <div class="row">
    <div class="col-lg-12">
      <div class="about-content stats-content">
        <h2 class="about-title">Key Highlights</h2>
        <div class="about-text">
          <p class="highlight-subtitle">Cumulative Data Of FINSEC Over The Last 5 Years.</p>
        </div>
        <div class="cube-container"></div>
        <div class="stats-grid">
          <div class="stat-item">
            <h3 class="stat-number">1500<span class="plus">+</span></h3>
            <p class="stat-label">PARTICIPANTS FROM<br>BFSI & FINTECH</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">130<span class="plus">+</span></h3>
            <p class="stat-label">SPONSORS/PARTNERS</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">2500<span class="plus">+</span></h3>
            <p class="stat-label">COMPANIES</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">750<span class="plus">+</span></h3>
            <p class="stat-label">SPEAKERS</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">2700<span class="plus">+</span></h3>
            <p class="stat-label">DELEGATES</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<style>
  /* Diagonal Images Container */
  .diagonal-images-container {
    position: relative;
    margin-top: 60px;
  }

  .first-diagonal {
    position: relative;
    border-bottom-right-radius: 50px;
  }

  .diagonal-images-wrapper:hover img {
    transform: scale(1.05);
  }


  /* Responsive Styles */
  @media (max-width: 991px) {

    .stats-content {
      margin-top: 30px;
      text-align: center;
    }
  }



  /* Stats Grid Responsive Styles */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .stat-item {
    text-align: center;
  }

  @media (max-width: 767px) {
    .stats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  .coin-container {
    width: 250px;
    height: 250px;
    position: relative;
    perspective: 1000px;
    overflow: hidden;
  }

  .coin {
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: spin 2s linear infinite;
  }

  .coin::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.8) 50%,
        rgba(255, 255, 255, 0) 100%);
    transform: rotate(25deg);
    animation: glare 4s infinite;
  }

  @keyframes glare {
    0% {
      transform: translate(-100%, -100%) rotate(25deg);
    }

    20%,
    100% {
      transform: translate(100%, 100%) rotate(25deg);
    }
  }

  @keyframes spin {
    0% {
      transform: rotateY(0deg);
    }

    100% {
      transform: rotateY(360deg);
    }
  }

  .side {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 80px;
    font-weight: bold;
    color: #7040c0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    border: 5px solid #7040c0;
    padding: 10px;
  }

  .front {
    transform: translateZ(10px);
  }

  .back {
    transform: rotateY(180deg) translateZ(10px);
  }

  .edge {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    left: 0;
    transform: translateY(-50%) rotateX(90deg);
    border-radius: 50%;
  }

  .fill-gap {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    transform: translateY(-50%) rotateX(90deg);
  }
</style>

<!-- Callout Section -->
<section class="callout-section">
  <div class="container">
    <div class="callout-image-wrapper">
      <a href="https://forms.gle/eGt7TbMHw7YLX7BF7" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('images/call-out-new.png') }}" alt="Call for Speakers" class="callout-image">
      </a>
    </div>
  </div>
</section>

<style>
  /* Callout Section Styles */
  .callout-section {
    padding: 0;
    /* Removed padding to allow full-width */
    background: #ffffff;
    min-height: 100vh;
    /* Full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    /* Prevent any potential overflow */
  }

  .callout-section .container {
    padding: 0;
    /* Remove container padding */
    max-width: 100%;
    /* Allow container to be full width */
    width: 100%;
  }

  .callout-image-wrapper {
    width: 100%;
    height: 100vh;
    /* Full viewport height */
    position: relative;
  }

  .callout-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
  }

  .callout-image-wrapper:hover a {
    // transform: scale(1.02);
    /* Subtle zoom effect on hover */
  }

  .callout-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Maintain aspect ratio while covering full area */
    border-radius: 0;
    /* Remove border radius for full-screen effect */
    box-shadow: none;
    /* Remove shadow for full-screen effect */
  }

  /* Responsive Styles */
  @media (max-width: 1200px) {
    .callout-section {
      min-height: auto;
    }

    .callout-image-wrapper {
      height: auto;
      max-width: 90%;
      margin: 40px auto;
    }

    .callout-image {
      border-radius: 20px;
      /* Restore border radius for smaller screens */
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      /* Restore shadow for smaller screens */
    }
  }

  @media (max-width: 768px) {
    .callout-image-wrapper {
      max-width: 95%;
      margin: 30px auto;
    }
  }

  @media (max-width: 480px) {
    .callout-image-wrapper {
      margin: 20px auto;
    }
  }
</style>

<!-- City Skyline Section -->
<section class="city-skyline-section">
  <div class="city-content">
    <div class="text-overlay">
      <div class="event-date-top">4th - 5th June 2025</div>
      <h2 class="city-name">Mumbai</h2>
    </div>
    <div class="city-image-container">
      <img src="{{ asset('images/city.png') }}" alt="Mumbai Skyline" class="city-image">
    </div>
  </div>
</section>

<!-- Broad Focus Section -->
<section class="content-section focus-section" id="broadFocus">
  <div class="dotted-bg-animation">
    <div class="dot-container"></div>
  </div>
  <div class="container">
    <h1 class="bf-title" style="text-align: center; font-size: 40px; font-weight: 700;">Broad Focus Areas</h1>
    <div class="focus-carousel-container">
      <button class="carousel-prev" aria-label="Previous slide">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <div class="focus-carousel">
        <!-- First card active by default -->
        <div class="focus-card active">
          <div class="focus-card-inner">
            <div class="focus-icon">
              <img src="{{ asset('images/broad-focus/Dsci icon_Transaction Security.svg') }}" alt="Home Icon">
            </div>
            <div class="focus-content">
              <h3 class="focus-title">Transaction Security</h3>
            </div>
          </div>
        </div>

        <div class="focus-card">
          <div class="focus-card-inner">
            <div class="focus-icon">
              <img src="{{ asset('images/broad-focus/Dsci icon_Payment Innovations.svg') }}" alt="Home Icon">
            </div>
            <div class="focus-content">
              <h3 class="focus-title">Payment Innovations</h3>
            </div>
          </div>
        </div>
        <div class="focus-card">
          <div class="focus-card-inner">
            <div class="focus-icon">
              <img src="{{ asset('images/broad-focus/Dsci icon_TalentNext-gen digital crimes of tomorrow.svg') }}"
                alt="Home Icon">
            </div>
            <div class="focus-content">
              <h3 class="focus-title">Fraud Prevention</h3>
            </div>
          </div>
        </div>
        <div class="focus-card">
          <div class="focus-card-inner">
            <div class="focus-icon">
              <img src="{{ asset('images/broad-focus/Dsci icon_Talent of tomorrow.svg') }}" alt="Home Icon">
            </div>
            <div class="focus-content">
              <h3 class="focus-title">Digital Identity</h3>
            </div>
          </div>
        </div>
        <div class="focus-card">
          <div class="focus-card-inner">
            <div class="focus-icon">
              <img src="{{ asset('images/broad-focus/Dsci icon_SupTech.svg') }}" alt="Home Icon">
            </div>
            <div class="focus-content">
              <h3 class="focus-title">Regulatory Technology</h3>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-next" aria-label="Next slide">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
      <div class="carousel-dots"></div>
    </div>
  </div>
</section>

<!-- Tickets Section -->
<section class="tickets-section">
  <div class="container">
    <div class="section-headers mb-5">
      <h6 class="section-subtitle">TICKETS</h6>
      <h2 class="section-title">Secure your <span class="text-tickets">Access</span> to FINSEC</h2>
    </div>
    <div class="tickets-grid">
      <!-- Early Bird Ticket -->
      <div class="ticket-card">
        <div class="ticket-content">
          <div class="discount-banner" style="color: #A56CFF; font-weight: 700;">20% DISCOUNT ON REGULAR PASS</div>
          <h3 class="ticket-type">EARLY BIRD</h3>
          <div class="ticket-price">
            <span class="currency">₹</span>
            <span class="amount">7552</span>
          </div>
          <p class="tax-info">Incl of taxes</p>
          <div class="validity">
            <p>Valid till 10<sup>th</sup> April</p>
          </div>
          <div class="access-details">
            <h4>Get access to</h4>
            <ul>
              <li>All Workshops - Day 1 & 2</li>
              <li>All Stage Access - Day 1 & 2</li>
              <li>Networking Dinner</li>
            </ul>
          </div>
          <a href="#" class="btn-get-pass">Get Pass</a>
        </div>
      </div>

      <div class="ticket-card">
        <div class="ticket-content">
          <div class="discount-banner" style="color: #A56CFF; font-weight: 700;">30% DISCOUNT ON REGULAR PASS</div>
          <h3 class="ticket-type">SHEROES PASS</h3>
          <div class="ticket-price">
            <span class="currency">₹</span>
            <span class="amount">6608</span>
          </div>
          <p class="tax-info">Incl of taxes</p>
          <div class="validity">
            <p>For Women Delegates only</p>
          </div>
          <div class="access-details">
            <h4>Get access to</h4>
            <ul>
              <li>All Workshops - Day 1 & 2</li>
              <li>All Stage Access - Day 1 & 2</li>
              <li>Networking Dinner</li>
            </ul>
          </div>
          <a href="#" class="btn-get-pass">Get Pass</a>
        </div>
      </div>

      <!-- Second Row -->
      <div class="ticket-card">
        <div class="ticket-content">
          <div class="discount-banner" style="color: #A56CFF; font-weight: 700;">30% DISCOUNT ON REGULAR PASS</div>
          <h3 class="ticket-type">GROUP REGISTRATION</h3>
          <div class="ticket-price">
            <span class="currency">₹</span>
            <span class="amount">6608</span>
          </div>
          <p class="tax-info">Incl of taxes</p>
          <div class="validity">
            <p>On registration of 3-5 delegates</p>
          </div>
          <div class="access-details">
            <h4>Get access to</h4>
            <ul>
              <li>All Workshops - Day 1 & 2</li>
              <li>All Stage Access - Day 1 & 2</li>
              <li>Networking Dinner</li>
            </ul>
          </div>
          <a href="#" class="btn-get-pass">Get Pass</a>
        </div>
      </div>
      <div class="ticket-card">
        <div class="ticket-content">
          <div class="discount-banner" style="color: #A56CFF; font-weight: 700;">35% DISCOUNT ON REGULAR PASS</div>
          <h3 class="ticket-type">GROUP REGISTRATION</h3>
          <div class="ticket-price">
            <span class="currency">₹</span>
            <span class="amount">6136</span>
          </div>
          <p class="tax-info">Incl of taxes</p>
          <div class="validity">
            <p>On registration of 6+ delegates</p>
          </div>
          <div class="access-details">
            <h4>Get access to</h4>
            <ul>
              <li>All Workshops - Day 1 & 2</li>
              <li>All Stage Access - Day 1 & 2</li>
              <li>Networking Dinner</li>
            </ul>
          </div>
          <a href="#" class="btn-get-pass">Get Pass</a>
        </div>
      </div>

    </div>

    <div class="ticket-card-membership">
      <div class="ticket-content">
        <div class="discount-banner" style="color: #A56CFF; font-weight: 700;">50% DISCOUNT ON REGULAR PASS</div>
        <h3 class="ticket-type">MEMBERSHIP PASS</h3>
        <div class="ticket-price">
          <span class="currency">₹</span>
          <span class="amount">4720</span>
        </div>
        <p class="tax-info">Incl of taxes</p>
        <div class="validity">
          <p>2 Passes Complimentary</p>
          <p>Write to <a href="mailto:membership@dsci.in">membership@dsci.in</a> for more details</p>
        </div>
        <div class="access-details">
          <h4>Get access to</h4>
          <ul>
            <li>All Workshops - Day 1 & 2</li>
            <li>All Stage Access - Day 1 & 2</li>
            <li>Networking Dinner</li>
          </ul>
        </div>
        <a href="#" class="btn-get-pass">Get Pass</a>
      </div>
    </div>
    <div class="navigation-container">
      <button class="nav-arrow prev-arrow" aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="dots-container">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <button class="nav-arrow next-arrow" aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  const dots = document.querySelectorAll('.dot');
  const prevArrow = document.querySelector('.prev-arrow');
  const nextArrow = document.querySelector('.next-arrow');
  let currentIndex = 0;

  function updateDots(index) {
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  prevArrow.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + dots.length) % dots.length;
    updateDots(currentIndex);
  });

  nextArrow.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % dots.length;
    updateDots(currentIndex);
  });
});
</script>

<!-- FAQ Section -->
<section class="faq-section py-5">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h5 class="section-small-title">FAQs</h5>
      <h2 class="section-title">All Your Doubts Answered</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="faq-accordion" id="faqAccordion">
          <!-- FAQ Item 1 -->
          <div class="faq-item">
            <div class="faq-header" id="headingOne">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                How can I register for the FINSEC Conclave 2025?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                Please follow these steps to register for FINSEC Conclave 2025:
                <p>Step 1: Click on the type of pass to register with.</p>
                <p>Step 2: Choose the number of delegate(s).</p>
                <p>Step 3: Fill in all details of the delegate(s).</p>
                <p>Step 4: Submit the payment to confirm participation.</p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq-item">
            <div class="faq-header" id="headingTwo">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                What are the payment options available for the registration?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>After filling the details, once you reach at the last step for submitting the payment, you will
                  have
                  the following 2 options:</p>
                <p><strong>Online mode</strong> - In this mode, you can submit the payment via debit/credit/net
                  banking/UPI. Using the
                  online option, once you make the payment, you will get a confirmation mail on your email id for the
                  event.</p>
                <p><strong>Offline mode</strong> - In this mode, you will have the option to submit the payment routed
                  via bank transfer.</p>
                <p>Once you choose this option and submit the details, you will be registered as not paid delegate.
                  Once
                  you do the bank transfer, you will need to share the UTR number with us. Once received, you will get
                  a
                  confirmation email of the registration.</p>
                <p><strong>*Note: Registration under offline mode will not be considered as confirmed until the
                    payment is
                    received by DSCI.</strong></p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq-item">
            <div class="faq-header" id="headingThree">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                How can I get the invoice for the registration?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>If you need an invoice for registration, make sure you add - (company name, address and GSTIN) on
                  STEP 2 in the Buyer section. The billing details need to be furnished to get the invoice.</p>
                <p>In case you choose to skip providing the invoicing details, the same would be considered under
                  unregistered and sharing of the tax invoice would not be possible post that.</p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="faq-item">
            <div class="faq-header" id="headingFour">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                What is included in my registration pass?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Your registration pass gives you access to all sessions and workshops for the event and meals
                  during
                  the event.</p>
                <p><strong>*Note: The access of the pass is excluded from any exclusive or special session defined as
                    Invite Only.</strong></p>
              </div>
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="faq-item">
            <div class="faq-header" id="headingFive">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                How can I get my pass on the event day?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>To obtain your pass on the event day, you would need to visit the registration counter and mention
                  your registration number and identity card to get your delegate badge at the venue.</p>
              </div>
            </div>
          </div>
          <!-- FAQ Item 6 -->
          <div class="faq-item">
            <div class="faq-header" id="headingSix">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                aria-expanded="false" aria-controls="collapseFive">
                Is accommodation part of my registration pass?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Unfortunately no, the accommodation and travel will have to be taken care by the delegates on their
                  own. DSCI will not be responsible for the same. However, if you wish to stay at the event venue, you
                  can book your accommodation at the special DSCI-negotiated rates crafted for the delegates only. You
                  may have a look at it by going to the venue section of the event website.</p>
              </div>
            </div>
          </div>
          <!-- FAQ Item 7 -->
          <div class="faq-item">
            <div class="faq-header" id="headingSeven">
              <button class="faq-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Will there be any pick/drop facility available for the venue?
                <span class="faq-icon">
                  <i class="fa-solid fa-plus"></i>
                  <i class="fa-solid fa-minus"></i>
                </span>
              </button>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Unfortunately, no pick/drop facility is available for the event. It is advisable that delegates
                  should plan their commute on their behalf only.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* FAQ Section Styles */
  .faq-section {
    padding: 100px 0;
    background-color: #ffffff;
  }

  .section-small-title {
    font-size: 20px;
    font-weight: 600;
    color: #A56CFF;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .section-title {
    font-size: 64px;
    font-weight: 700;
    color: #000000;
    margin-bottom: 50px;
  }

  .faq-item {
    margin-bottom: 16px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .faq-header {
    width: 100%;
  }

  .faq-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 20px 30px;
    background-color: #A56CFF;
    border: 2px solid #F0F0F0;
    border-radius: 12px;
    text-align: left;
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .faq-button:hover,
  .faq-button:focus {
    background-color: #cff300;
    border-color: #A56CFF;
    color: #A56CFF;
    outline: none;
  }

  .faq-button:not(.collapsed) {
    background-color: #cff300;
    border-color: #A56CFF;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    color: #A56CFF;
  }

  .faq-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 24px;
    height: 24px;
    margin-left: 15px;
    border-radius: 50%;
    color: #ffffff;
  }

  .faq-icon .fa-minus {
    display: none;
  }

  .faq-button:not(.collapsed) .fa-plus {
    display: none;
    color: #A56CFF;
  }

  .faq-button:not(.collapsed) .fa-minus {
    display: inline-block;
  }

  .faq-body {
    padding: 20px 30px;
    background-color: #ffffff;
    border: 2px solid #A56CFF;
    border-top: none;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    color: #555555;
    font-size: 16px;
    line-height: 1.6;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .faq-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .faq-button {
      padding: 15px 20px;
      font-size: 16px;
    }

    .faq-body {
      padding: 15px 20px;
    }
  }

  .focus-title {
    font-size: 36px;
    font-weight: 700;
    color: #A56CFF;
    text-align: center;
  }

  .focus-description {
    display: none;
  }

  /* Updated responsive adjustments */
  @media (max-width: 991px) {
    .focus-carousel-container {
      max-width: 650px;
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }

    .focus-title {
      font-size: 32px;
    }

    .carousel-prev {
      left: -40px;
    }

    .carousel-next {
      right: -40px;
    }
  }

  @media (max-width: 767px) {
    .focus-carousel-container {
      max-width: 480px;
    }

    .focus-card {
      flex: 0 0 350px;
      height: 212px;
      padding: 30px 50px;
    }

    .focus-title {
      font-size: 30px;
    }

    .carousel-prev {
      left: -30px;
      width: 40px;
      height: 40px;
    }

    .carousel-next {
      right: -30px;
      width: 40px;
      height: 40px;
    }

    .bf-title {
      font-size: 60px;
      line-height: 70px;
    }
  }

  @media (max-width: 480px) {
    .focus-carousel-container {
      max-width: 300px;
      /* Show just the main card on mobile */
    }

    .focus-card {
      flex: 0 0 280px;
      height: 170px;
      padding: 20px 30px;
    }

    .focus-title {
      font-size: 24px;
    }

    .focus-icon {
      width: 50px;
      min-width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }

    .carousel-prev {
      left: -25px;
      width: 36px;
      height: 36px;
    }

    .carousel-next {
      right: -25px;
      width: 36px;
      height: 36px;
    }

    .bf-title {
      font-size: 42px;
      line-height: 50px;
    }
  }

  /* Ensure consistent font weights across the site */
  .text-light {
    font-weight: 300;
  }

  .text-regular {
    font-weight: 400;
  }

  .text-medium {
    font-weight: 500;
  }

  .text-bold {
    font-weight: 700;
  }

  /* Add font smoothing for better rendering */
  * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .coin-container {
    width: 250px;
    height: 250px;
    position: relative;
    perspective: 1000px;
    overflow: hidden;
  }

  .coin {
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: spin 2s linear infinite;
  }

  .coin::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.8) 50%,
        rgba(255, 255, 255, 0) 100%);
    transform: rotate(25deg);
    animation: glare 4s infinite;
  }

  @keyframes glare {
    0% {
      transform: translate(-100%, -100%) rotate(25deg);
    }

    20%,
    100% {
      transform: translate(100%, 100%) rotate(25deg);
    }
  }

  @keyframes spin {
    0% {
      transform: rotateY(0deg);
    }

    100% {
      transform: rotateY(360deg);
    }
  }

  .side {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 80px;
    font-weight: bold;
    color: #7040c0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    border: 5px solid #7040c0;
    padding: 10px;
  }

  .front {
    transform: translateZ(10px);
  }

  .back {
    transform: rotateY(180deg) translateZ(10px);
  }

  .edge {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    left: 0;
    transform: translateY(-50%) rotateX(90deg);
    border-radius: 50%;
  }

  .fill-gap {
    position: absolute;
    width: 100%;
    height: 20px;
    background: #7040c0;
    top: 50%;
    transform: translateY(-50%) rotateX(90deg);
  }
</style>

<script>
  // This script ensures the accordions are closed initially
    document.addEventListener("DOMContentLoaded", function() {
      const accordionButtons = document.querySelectorAll('.faq-button');

      accordionButtons.forEach(button => {
        button.classList.add('collapsed');
        const target = document.querySelector(button.getAttribute('data-bs-target'));
        if (target) {
          target.classList.remove('show');
        }
      });
    });
</script>

<!-- Footer -->
<div id="footer">
  @include('partials.footer')
</div>

</div>

@section('custom-css')
<style>
  /* Mobile Menu Styles */
  .mobile-menu {
    background-color: #05102d;
  }

  /* Mobile logo size */
  .mobile-menu .logo img {
    width: 129px;
    height: auto;
  }

  .mobile-menu .site-menu ul li a {
    font-size: 15px;
    font-weight: 500;
    padding: 12px 0;
    display: block;
  }

  .mobile-menu .site-menu ul li a:hover {
    color: #01B380;
  }

  .dropbtnmob {
    color: white;
    background-color: transparent;
    padding: 12px 0;
    font-size: 15px;
    font-weight: 500;
    border: none;
    width: 100%;
    text-align: left;
    transition: all 0.3s ease;
  }

  .dropbtnmob:hover {
    color: #01B380;
  }

  .dropdownmob-content {
    background-color: rgba(1, 179, 128, 0.1);
  }

  .dropdownmob-content a {
    font-size: 15px;
    padding: 12px 15px;
  }

  .mobile-menu .register-btn a {
    display: inline-block;
    background-color: #01B380;
    color: white;
    font-size: 15px;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 30px;
    margin-top: 15px;
    transition: all 0.3s ease;
  }

  .mobile-menu .register-btn a:hover {
    background-color: #ffffff;
    color: #05102d;
    text-decoration: none;
  }

  /* Hero Section Styles */
  .hero-section {
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
    margin: 0;
    padding: 0;
  }

  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .video-background video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Remove any background colors and overlays */
  .overlay {
    display: none;
  }

  /* Event Bottom Panel Styles */
  .event-bottom-panel {
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    max-width: 1200px;
    background: rgba(1, 179, 128, 0.95);
    color: white;
    padding: 15px 0;
    z-index: 999;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.15);
  }

  .panel-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 15px;
    text-align: center;
    position: relative;
  }

  .panel-item::after {
    content: '';
    position: absolute;
    right: 0;
    top: 20%;
    height: 60%;
    width: 1px;
    background: rgba(255, 255, 255, 0.3);
  }

  .panel-item:last-child::after {
    display: none;
  }

  .info-icon {
    width: 18px;
    height: 18px;
    margin-right: 5px;
    vertical-align: middle;
    display: inline-block;
  }

  .info-label {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 5px;
    letter-spacing: 1px;
    opacity: 0.9;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .info-value {
    font-size: 16px;
    font-weight: 700;
  }

  .hashtags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 5px;
    margin-top: 5px;
  }

  .hashtag {
    font-size: 13px;
    font-weight: 600;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 2px 10px;
    border-radius: 15px;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .hashtag:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: translateY(-3px);
  }

  /* Media queries for responsive design */
  @media (max-width: 1200px) {
    .event-bottom-panel {
      width: 95%;
    }
  }

  @media (max-width: 991px) {
    .event-bottom-panel {
      width: 96%;
    }

    .panel-item {
      padding: 10px 0;
    }
  }

  @media (max-width: 767px) {
    .event-bottom-panel {
      width: 100%;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      padding: 12px 0;
    }

    .panel-item {
      padding: 5px 0;
    }

    .panel-item::after {
      display: none;
    }

    .info-icon {
      width: 16px;
      height: 16px;
      margin-right: 4px;
    }

    .info-label {
      font-size: 12px;
    }

    .info-value {
      font-size: 14px;
    }

    .hashtag {
      font-size: 12px;
      padding: 2px 8px;
    }

    body {
      margin-bottom: 130px;
    }

  }

  /* Add bottom margin to body for fixed panel */
  body {
    margin-bottom: 100px;
  }

  @media (max-width: 767px) {
    body {
      margin-bottom: 130px;
    }
  }

  /* Updated About Section Styles */
  .about-subtitle {
    font-family: var(--font-primary);
    color: #A56CFF;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 11%;
    margin-bottom: 20px;
  }

  .about-title {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 30px;
    color: #05102D;
    text-align: center;
  }

  .about-title .highlight {
    color: #A56CFF;
  }

  .about-text {
    color: #666;
    line-height: 1.8;
    margin-bottom: 40px;
    text-align: center;
  }

  .about-buttons {
    display: flex;
    gap: 20px;
  }

  .btn-read-more {
    background-color: #cff300;
    color: #A56CFF;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
    border: 1px solid #A56CFF;
  }

  .btn-read-more:hover {
    background-color: #A56CFF;
    color: white;
    transform: translateY(-2px);
  }

  .btn-report {
    background-color: #cff300;
    color: #A56CFF;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 700;
    border: 1px solid #A56CFF;
    transition: all 0.3s ease;
  }

  .btn-report:hover {
    background-color: #A56CFF;
    color: white;
    transform: translateY(-2px);
  }

  .about-image-grid {
    padding: 15px;
  }

  .image-wrapper {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .main-image {
    height: 618px;
  }

  .secondary-image {
    width: 100%;
    height: 478px;
  }

  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .image-wrapper:hover img {
    transform: scale(1.05);
  }

  @media (max-width: 991px) {
    .about-title {
      font-size: 36px;
    }

    .about-content {
      margin-bottom: 40px;
    }

    .main-image {
      height: 250px;
    }

    .secondary-image {
      height: 180px;
    }
  }

  @media (max-width: 767px) {
    .about-title {
      font-size: 32px;
    }

    .about-buttons {
      flex-direction: column;
    }

    .btn-read-more,
    .btn-report {
      width: 100%;
      text-align: center;
    }

    .main-image,
    .secondary-image {
      height: 200px;
    }
  }

  /* Speakers Section Styles */
  .speakers-slider {
    padding: 20px 0;
    margin: 0 -15px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .speakers-slider.slick-initialized {
    opacity: 1;
  }

  .speaker-item {
    padding: 0 11.5px;
    /* Half of the gap (23px) */
  }

  .speaker-image {
    width: 315px;
    height: 367px;
    overflow: hidden;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .speaker-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .search-input {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid #e0e0e0;
    border-radius: 25px;
    background-color: #f5f5f5;
    color: #333;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .search-input:focus {
    outline: none;
    border-color: #01B380;
    box-shadow: 0 0 0 2px rgba(1, 179, 128, 0.1);
  }

  .search-input::placeholder {
    color: #999;
  }

  @media (max-width: 991px) {
    .speaker-image {
      width: 200px;
      height: 320px;
    }
  }

  @media (max-width: 767px) {
    .speaker-image {
      width: 180px;
      height: 288px;
    }
  }

  .btn-primary {
    background-color: #01B380;
    border-color: #01B380;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #019e70;
    border-color: #019e70;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(1, 179, 128, 0.3);
  }

  .btn-lg {
    font-size: 16px;
  }

  .btn i {
    transition: transform 0.3s ease;
  }

  .btn:hover i {
    transform: translateX(5px);
  }


  /* Responsive Styles */
  @media (max-width: 991px) {
    .stats-content {
      margin-top: 30px;
      text-align: center;
    }
  }

  @media (min-width: 992px) and (max-width: 1200px) {}

  /* Stats Grid Responsive Styles */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .stat-item {
    text-align: center;
  }

  @media (max-width: 767px) {
    .stats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  /* Callout Section Styles */
  .callout-section {
    padding: 0;
    /* Removed padding to allow full-width */
    background: #ffffff;
    min-height: 100vh;
    /* Full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    /* Prevent any potential overflow */
  }

  .callout-section .container {
    padding: 0;
    /* Remove container padding */
    max-width: 100%;
    /* Allow container to be full width */
    width: 100%;
  }

  .callout-image-wrapper {
    width: 100%;
    height: 100vh;
    /* Full viewport height */
    position: relative;
  }

  .callout-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
  }

  .callout-image-wrapper:hover a {
    // transform: scale(1.02);
    /* Subtle zoom effect on hover */
  }

  .callout-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Maintain aspect ratio while covering full area */
    border-radius: 0;
    /* Remove border radius for full-screen effect */
    box-shadow: none;
    /* Remove shadow for full-screen effect */
  }

  /* Responsive Styles */
  @media (max-width: 1200px) {
    .callout-section {
      min-height: auto;
    }

    .callout-image-wrapper {
      height: auto;
      max-width: 90%;
      margin: 40px auto;
    }

    .callout-image {
      border-radius: 20px;
      /* Restore border radius for smaller screens */
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      /* Restore shadow for smaller screens */
    }
  }

  @media (max-width: 768px) {
    .callout-image-wrapper {
      max-width: 95%;
      margin: 30px auto;
    }
  }

  @media (max-width: 480px) {
    .callout-image-wrapper {
      margin: 20px auto;
    }
  }

  .text-tickets {
    color: #A56CFF;
  }

  /* FAQ Section Styles */
  .faq-section {
    padding: 100px 0;
    background-color: #ffffff;
  }

  .section-small-title {
    font-size: 20px;
    font-weight: 600;
    color: #A56CFF;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .section-title {
    font-size: 42px;
    font-weight: 700;
    color: #05102D;
    margin-bottom: 50px;
  }


  /* Responsive Styles */
  @media (max-width: 768px) {
    .faq-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .faq-button {
      padding: 15px 20px;
      font-size: 16px;
    }

    .faq-body {
      padding: 15px 20px;
    }
  }

  .focus-title {
    font-size: 36px;
    font-weight: 700;
    color: #A56CFF;
    text-align: center;
  }

  .focus-description {
    display: none;
  }

  /* Updated responsive adjustments */
  @media (max-width: 991px) {
    .focus-carousel-container {
      max-width: 650px;
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }

    .focus-title {
      font-size: 32px;
    }

    .carousel-prev {
      left: -40px;
    }

    .carousel-next {
      right: -40px;
    }
  }

  @media (max-width: 767px) {
    .focus-carousel-container {
      max-width: 480px;
    }

    .focus-card {
      flex: 0 0 350px;
      height: 212px;
      padding: 30px 50px;
    }

    .focus-title {
      font-size: 30px;
    }

    .carousel-prev {
      left: -30px;
      width: 40px;
      height: 40px;
    }

    .carousel-next {
      right: -30px;
      width: 40px;
      height: 40px;
    }

    .bf-title {
      font-size: 60px;
      line-height: 70px;
    }
  }

  @media (max-width: 480px) {
    .focus-carousel-container {
      max-width: 300px;
      /* Show just the main card on mobile */
    }

    .focus-card {
      flex: 0 0 280px;
      height: 170px;
      padding: 20px 30px;
    }

    .focus-title {
      font-size: 24px;
    }

    .focus-icon {
      width: 50px;
      min-width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }

    .carousel-prev {
      left: -25px;
      width: 36px;
      height: 36px;
    }

    .carousel-next {
      right: -25px;
      width: 36px;
      height: 36px;
    }

    .bf-title {
      font-size: 42px;
      line-height: 50px;
    }
  }

  /* Ensure consistent font weights across the site */
  .text-light {
    font-weight: 300;
  }

  .text-regular {
    font-weight: 400;
  }

  .text-medium {
    font-weight: 500;
  }

  .text-bold {
    font-weight: 700;
  }

  /* Add font smoothing for better rendering */
  * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>
@endsection

@section('custom-js')
<script>
  // Tab functionality for schedule
  function openPage(dayId, element, color) {
    var tabcontent = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove("show");
    }

    var tablinks = document.getElementsByClassName("tablink");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
        tablinks[i].style.backgroundColor = "";
    }

    document.getElementById(dayId).classList.add("show");
    element.classList.add("active");
    element.style.backgroundColor = color;
  }


  function initFocusCarousel() {
    const carousel = document.querySelector('.focus-carousel');
    const cards = Array.from(document.querySelectorAll('.focus-card'));
    const dotsContainer = document.querySelector('.carousel-dots');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');

    if (!carousel || cards.length === 0) return;

    let currentIndex = 0;
    const totalSlides = cards.length;

    // Clear existing dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';

        // Create dots based on number of cards
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.classList.add('carousel-dot');
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
    }

    function updateCarousel() {
        const cardWidth = cards[0].offsetWidth;
        const gap = 45;
        const offset = -currentIndex * (cardWidth + gap);

        carousel.style.transform = `translateX(${offset}px)`;

        // Update active states for cards
        cards.forEach((card, i) => {
            if (i === currentIndex) {
                // Main active card
                card.classList.add('active');
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
            } else if (i === currentIndex + 1) {
                // Next smaller card (visible on the right)
                card.classList.remove('active');
                card.style.opacity = '0.7';
                card.style.transform = 'scale(0.67)'; // Scaled down to 330px width (330/495 = ~0.67)
            } else {
                // Other cards
                card.classList.remove('active');
                card.style.opacity = '0.5';
                card.style.transform = 'scale(0.67)';
            }
        });

        // Update dots
        if (dotsContainer) {
            const dots = dotsContainer.querySelectorAll('.carousel-dot');
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        // Update button states
        if (prevButton) prevButton.disabled = currentIndex === 0;
        if (nextButton) nextButton.disabled = currentIndex === totalSlides - 1;
    }

    function goToSlide(index) {
        currentIndex = Math.max(0, Math.min(index, totalSlides - 1));
        updateCarousel();
    }

    // Event listeners for navigation
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                goToSlide(currentIndex - 1);
            }
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                goToSlide(currentIndex + 1);
            }
        });
    }

    // Initialize carousel
    updateCarousel();

    // Auto-play functionality
    let autoplayInterval;

    function startAutoplay() {
        stopAutoplay(); // Clear any existing interval
        autoplayInterval = setInterval(() => {
            if (currentIndex < totalSlides - 1) {
                goToSlide(currentIndex + 1);
            } else {
                goToSlide(0); // Reset to start
            }
        }, 5000);
    }

    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }

    // Add hover listeners to pause/resume autoplay
    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);

    // Start autoplay
    startAutoplay();

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft' && currentIndex > 0) {
            goToSlide(currentIndex - 1);
        }
        if (e.key === 'ArrowRight' && currentIndex < totalSlides - 1) {
            goToSlide(currentIndex + 1);
        }
    });

    // Add swipe functionality for mobile devices
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, false);

    carousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, false);

    function handleSwipe() {
        const swipeThreshold = 50; // Minimum swipe distance
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left - go to next
            if (currentIndex < totalSlides - 1) {
                goToSlide(currentIndex + 1);
            }
        } else if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right - go to previous
            if (currentIndex > 0) {
                goToSlide(currentIndex - 1);
            }
        }
    }
}


  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Focus Area Carousel
    initFocusCarousel();

    // Initialize Speakers Slider
    $('.speakers-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // Search functionality
    $('#slidename').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.speaker-item').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // Open the first schedule tab by default
    var firstTab = document.querySelector('.tablink');
    if (firstTab) {
        firstTab.click();
    }

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    const heroSection = document.querySelector('.hero-section');

    const handleScroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('transparent-navbar');
        } else {
            navbar.classList.remove('scrolled');
            navbar.classList.add('transparent-navbar');
        }
    };

    // Run on page load
    handleScroll();

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Hamburger menu toggle
    const hamburger = document.querySelector('.hamburger-menu .menu');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (hamburger) {
        hamburger.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.querySelector('.inner').style.opacity = '1';
                mobileMenu.querySelector('.inner').style.transform = 'translateX(0)';
            } else {
                mobileMenu.querySelector('.inner').style.opacity = '0';
                mobileMenu.querySelector('.inner').style.transform = 'translateX(-50px)';
            }
        });
    }

    // Dropdown functionality for mobile menu
    var dropdownBtn = document.querySelector('.dropbtnmob');
    if (dropdownBtn) {
        dropdownBtn.addEventListener('mouseover', function() {
            document.getElementById("myDropdownmob").classList.add("showmob");
        });

        document.querySelector('.dropdownmob').addEventListener('mouseout', function(event) {
            if (!event.relatedTarget || !event.relatedTarget.closest('.dropdownmob')) {
                document.getElementById("myDropdownmob").classList.remove("showmob");
            }
        });
    }

    // Add parallax effect to hero section
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            const parallaxEffect = scrollPosition * 0.5;
            heroSection.style.backgroundPosition = `center ${parallaxEffect}px`;
        });
    }
  });
</script>

@endsection

<script>
  function toggleContent() {
  const expandedContent = document.querySelector('.expanded-content');
  const readMoreBtn = document.querySelector('.btn-read-more');

  if (expandedContent.style.display === 'none') {
    expandedContent.style.display = 'block';
    expandedContent.style.opacity = '0';
    setTimeout(() => {
      expandedContent.style.opacity = '1';
    }, 10);
    readMoreBtn.textContent = 'Read Less';
  } else {
    expandedContent.style.opacity = '0';
    setTimeout(() => {
      expandedContent.style.display = 'none';
      readMoreBtn.textContent = 'Read More';
    }, 300);
  }
}
</script>

<style>
  .expanded-content {
    transition: opacity 0.3s ease;
  }

  .btn-read-more {
    background-color: #cff300;
    color: #a56cff;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    margin-right: 20px;
  }

  .btn-read-more:hover {
    background-color: #a56cff;
    color: #ffffff;
    transform: translateY(-2px);
  }

  .about-buttons {
    display: flex;
    gap: 20px;
    margin-top: 30px;
  }

  @media (max-width: 767px) {
    .about-buttons {
      flex-direction: column;
    }

    .btn-read-more {
      margin-right: 0;
      margin-bottom: 15px;
    }
  }
</style>
