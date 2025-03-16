@extends('layouts.app')

@section('title', 'AISS 2025 | Annual Information Security Summit 2025 | DSCI')

@section('content')
<!-- Add Space Grotesk font -->
<link rel="stylesheet" href="{{ asset('css/lib/space-grotesk.css') }}">

<style>
  /* Global font styles */
  body {
    font-family: 'Space Grotesk', sans-serif;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
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
  .view-all-btn {
    font-family: 'Space Grotesk', sans-serif;
  }

  /* Hero Section Styles */
  .hero-section {
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
    margin: 0;
    padding: 0;
    background: transparent;
  }

  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .video-background video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: relative;
    z-index: 2;
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
    text-align: left;
  }

  .stat-number {
    font-family: 'Space Grotesk', sans-serif;
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
    color: #ffffff;
    margin-bottom: 10px;
    font-size: 20px;
  }

  .timeline-content p {
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 15px;
  }

  .event-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }

  .event-meta span {
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
    color: #ffffff;
    font-size: 16px;
    margin: 0;
  }

  .speaker-info .role {
    color: #01B380;
    font-size: 12px;
    display: block;
  }

  .speaker-info p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    margin: 0;
  }

  .tablink {
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
    transform: scale(1.02);
    /* Subtle zoom effect on hover */
  }

  .callout-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
    height: 100%;
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
    font-weight: 500;
    margin-top: 15%;
    transform: translateY(30px);
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
    transform: translateY(30%);
    animation: sunriseText 4s ease-out forwards;
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
    overflow: hidden;
  }

  .section-subtitle {
    color: #A56CFF;
    font-size: 14px;
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
    max-width: 1035px;
    /* Accommodates 2 cards with gap (495px * 2 + 45px) */
    margin: 0 auto;
    position: relative;
  }

  .focus-carousel {
    display: flex;
    position: relative;
    transition: transform 0.5s ease-in-out;
    gap: 45px;
    will-change: transform;
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
    transform: scale(0.95);
    opacity: 0.7;
  }

  .focus-card.active {
    transform: scale(1);
    opacity: 1;
  }

  .focus-card-inner {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .carousel-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
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
  }

  .carousel-prev {
    left: -60px;
  }

  .carousel-next {
    right: -60px;
  }

  .carousel-prev:disabled,
  .carousel-next:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  .carousel-prev:not(:disabled):hover,
  .carousel-next:not(:disabled):hover {
    background: #A56CFF;
    transform: translateY(-50%) scale(1.1);
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
    background: rgba(255, 255, 255, 0.3);
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .carousel-dot.active {
    background: #ffffff;
    transform: scale(1.2);
  }

  .carousel-dot:hover {
    background: rgba(165, 108, 255, 0.5);
  }

  @media (max-width: 1680px) {
    .focus-carousel-container {
      max-width: 845px;
      /* Accommodates 2 cards with gap (400px * 2 + 45px) */
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }
  }

  @media (max-width: 1366px) {
    .focus-carousel-container {
      max-width: 685px;
      /* Accommodates 2 cards with gap (320px * 2 + 45px) */
    }

    .focus-card {
      flex: 0 0 320px;
      height: 193px;
      padding: 25px 45px;
    }
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
    margin-top: 5px;
  }

  .focus-icon img {
    width: 100%;
    height: auto;
    filter: brightness(0) invert(1);
  }

  .focus-content {
    flex: 1;
  }

  .focus-title {
    font-size: 28px;
    font-weight: 700;
    color: #A56CFF;
    margin-bottom: 15px;
    text-align: left;
  }

  .focus-description {
    color: #A56CFF;
    font-size: 16px;
    line-height: 1.6;
    text-align: left;
  }

  /* Carousel Navigation */
  .carousel-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
  }

  .carousel-dots {
    display: flex;
    gap: 8px;
  }

  .carousel-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .carousel-dot.active {
    background: #A56CFF;
    transform: scale(1.2);
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
  }

  .carousel-prev {
    left: -60px;
  }

  .carousel-next {
    right: -60px;
  }

  .carousel-prev:disabled,
  .carousel-next:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  .carousel-prev:not(:disabled):hover,
  .carousel-next:not(:disabled):hover {
    background: #A56CFF;
    transform: translateY(-50%) scale(1.1);
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
    background: rgba(255, 255, 255, 0.3);
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .carousel-dot.active {
    background: #ffffff;
    transform: scale(1.2);
  }

  .carousel-dot:hover {
    background: rgba(165, 108, 255, 0.5);
  }

  @media (max-width: 991px) {
    .focus-section {
      padding: 80px 0;
    }

    .section-title {
      font-size: 36px;
    }

    .focus-card-inner {
      min-height: 200px;
      padding: 25px;
      gap: 20px;
    }

    .focus-title {
      font-size: 24px;
    }

    .focus-icon {
      width: 60px;
      min-width: 60px;
      height: 60px;
    }
  }

  @media (max-width: 767px) {
    .focus-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 32px;
    }

    .focus-card-inner {
      flex-direction: column;
      min-height: auto;
      padding: 25px;
      gap: 15px;
    }

    .focus-icon {
      width: 60px;
      min-width: 60px;
      height: 60px;
      margin: 0 0 10px 0;
    }

    .focus-title {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .focus-description {
      font-size: 14px;
    }
  }

  /* Add fallback styles in case video fails to load */
  .hero-section.video-fallback {
    background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
  }

  /* Ensure video covers the entire section */
  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .video-background video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translateX(-50%) translateY(-50%);
    object-fit: cover;
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
    font-size: 14px;
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
    grid-template-columns: repeat(3, 1fr);
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
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
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
    justify-content: center;
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
    object-fit: cover;
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

      // Error handling for video
      video.addEventListener('error', function(e) {
          console.error('Error loading video:', e);
          // Add a CSS class to maintain the section's appearance even if video fails to load
          document.querySelector('.hero-section').classList.add('video-fallback');
      });
  });
  </script>

  <style>
    /* Add fallback styles in case video fails to load */
    .hero-section.video-fallback {
      background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
    }

    /* Ensure video covers the entire section */
    .video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .video-background video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      transform: translateX(-50%) translateY(-50%);
      object-fit: cover;
    }
  </style>

  <!-- About Section -->
  <section class="content-section bg-white" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-content">
            <h6 class="about-subtitle">ABOUT US</h6>
            <h2 class="about-title">
              Financial <span class="highlight">Security</span><br>
              Conclave 2025
            </h2>
            <div class="about-text">
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
              <p>Join us at Finsec 2025 to engage with industry leaders, share insights, and shape the future
                of financial security.</p>
            </div>
            <div class="about-buttons">
              <a href="#" class="btn btn-read-more">Read More</a>
              <a href="#" class="btn btn-report">FINSEC 25 Report</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-image-grid">
            <div class="image-wrapper main-image">
              <img src="{{ asset('images/Rectangle-42016.png') }}" alt="Financial Security Conference"
                class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container diagonal-images-container">
      <div class="row">
        <div class="col-lg-8">
          <div class="diagonal-image-wrapper ">
            <img src="{{ asset('images/Rectangle-42015.png') }}" alt="Financial Security Conference" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about-content stats-content">
            <h2 class="about-title">Key Highlights</h2>
            <div class="about-text">
              <p class="highlight-subtitle">Cumulative Data Of FINSEC Over The Last 5 Years.</p>
            </div>
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
      transform: scale(1.02);
      /* Subtle zoom effect on hover */
    }

    .callout-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
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
      <h1 class="bf-title">Broad Focus Areas</h1>
      <div class="focus-carousel-container">
        <div class="focus-carousel">
          <!-- First card active by default -->
          <div class="focus-card active">
            <div class="focus-card-inner">
              <div class="focus-icon">
                <img src="{{ asset('images/broad-focus/Asset 1.svg') }}" alt="Transaction Security Icon">
              </div>
              <div class="focus-content">
                <h3 class="focus-title">Transaction Security</h3>
                <p class="focus-description">Enhancing the security of financial transactions through advanced
                  encryption, multi-factor authentication, and real-time monitoring systems.</p>
              </div>
            </div>
          </div>

          <div class="focus-card">
            <div class="focus-card-inner">
              <div class="focus-icon">
                <img src="{{ asset('images/broad-focus/Asset 1.svg') }}" alt="Payment Innovations Icon">
              </div>
              <div class="focus-content">
                <h3 class="focus-title">Payment Innovations</h3>
                <p class="focus-description">Exploring cutting-edge payment technologies, digital currencies, and secure
                  transaction methods that transform the financial landscape.</p>
              </div>
            </div>
          </div>
          <div class="focus-card">
            <div class="focus-card-inner">
              <div class="focus-icon">
                <img src="{{ asset('images/broad-focus/Asset 1.svg') }}" alt="Payment Innovations Icon">
              </div>
              <div class="focus-content">
                <h3 class="focus-title">Payment Innovations</h3>
                <p class="focus-description">Exploring cutting-edge payment technologies, digital currencies, and secure
                  transaction methods that transform the financial landscape.</p>
              </div>
            </div>
          </div>
          <div class="focus-card">
            <div class="focus-card-inner">
              <div class="focus-icon">
                <img src="{{ asset('images/broad-focus/Asset 1.svg') }}" alt="Payment Innovations Icon">
              </div>
              <div class="focus-content">
                <h3 class="focus-title">Payment Innovations</h3>
                <p class="focus-description">Exploring cutting-edge payment technologies, digital currencies, and secure
                  transaction methods that transform the financial landscape.</p>
              </div>
            </div>
          </div>
          <div class="focus-card">
            <div class="focus-card-inner">
              <div class="focus-icon">
                <img src="{{ asset('images/broad-focus/Asset 1.svg') }}" alt="Payment Innovations Icon">
              </div>
              <div class="focus-content">
                <h3 class="focus-title">Payment Innovations</h3>
                <p class="focus-description">Exploring cutting-edge payment technologies, digital currencies, and secure
                  transaction methods that transform the financial landscape.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="carousel-nav">
          <button class="carousel-prev" aria-label="Previous slide">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="carousel-dots"></div>
          <button class="carousel-next" aria-label="Next slide">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
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
        <!-- First Row -->
        <div class="ticket-card">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Early Bird</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">12,000</span>
                <span class="duration">/person</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> Access to all sessions</li>
                <li><i class="fas fa-check"></i> Conference materials</li>
                <li><i class="fas fa-check"></i> Lunch and refreshments</li>
                <li><i class="fas fa-check"></i> Networking opportunities</li>
                <li><i class="fas fa-check"></i> Certificate of participation</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>

        <div class="ticket-card featured">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Standard</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">15,000</span>
                <span class="duration">/person</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> All Early Bird features</li>
                <li><i class="fas fa-check"></i> Priority seating</li>
                <li><i class="fas fa-check"></i> Workshop access</li>
                <li><i class="fas fa-check"></i> Event recordings</li>
                <li><i class="fas fa-check"></i> Exclusive Q&A sessions</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>

        <div class="ticket-card">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Premium</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">20,000</span>
                <span class="duration">/person</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> All Standard features</li>
                <li><i class="fas fa-check"></i> VIP networking dinner</li>
                <li><i class="fas fa-check"></i> One-on-one mentoring</li>
                <li><i class="fas fa-check"></i> Premium swag bag</li>
                <li><i class="fas fa-check"></i> Lifetime community access</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>

        <!-- Second Row -->
        <div class="ticket-card">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Group Pass</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">40,000</span>
                <span class="duration">/group</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> Access for 3 people</li>
                <li><i class="fas fa-check"></i> All Standard features</li>
                <li><i class="fas fa-check"></i> Group seating</li>
                <li><i class="fas fa-check"></i> Special group rates</li>
                <li><i class="fas fa-check"></i> Group networking session</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>

        <div class="ticket-card">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Virtual Pass</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">8,000</span>
                <span class="duration">/person</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> Online access to sessions</li>
                <li><i class="fas fa-check"></i> Digital materials</li>
                <li><i class="fas fa-check"></i> Virtual networking</li>
                <li><i class="fas fa-check"></i> Session recordings</li>
                <li><i class="fas fa-check"></i> Online Q&A access</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>

        <div class="ticket-card">
          <div class="ticket-content">
            <div class="ticket-header">
              <h3 class="ticket-type">Student Pass</h3>
              <div class="ticket-price">
                <span class="currency">₹</span>
                <span class="amount">5,000</span>
                <span class="duration">/person</span>
              </div>
            </div>
            <div class="ticket-body">
              <ul class="ticket-features">
                <li><i class="fas fa-check"></i> Valid student ID required</li>
                <li><i class="fas fa-check"></i> Access to all sessions</li>
                <li><i class="fas fa-check"></i> Digital materials</li>
                <li><i class="fas fa-check"></i> Student networking</li>
                <li><i class="fas fa-check"></i> Career guidance session</li>
              </ul>
            </div>
            <a href="#" class="btn-get-pass">Get Pass</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Speakers Section -->
  <section class="content-section bg-white" id="speakers">
    <div class="container" style="margin-top:50px;">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-12 col-lg-6">
          <div class="section-title">
            <h2 class="text-dark">Event Speakers</h2>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <form class="filter">
            <input type="text" id="slidename" placeholder="Search by name" class="search-input" />
          </form>
        </div>
      </div>
      <div class="speakers-slider">
        @foreach($speakers as $speaker)
        <div class="speaker-item">
          <div class="speaker-image">
            <img src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" class="speaker-img">
          </div>
          <div class="speaker-info">
            <h4 class="text-dark">{{ $speaker->name }}</h4>
            <p class="designation">{{ $speaker->designation }}</p>
            @if($speaker->company)
            <p class="company text-secondary">{{ $speaker->company }}</p>
            @endif
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center mt-4">
        <a href="#" class="btn btn-primary btn-lg rounded-pill">
          View All Speakers
          <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Event Schedule Section -->
  <section class="content-section" id="eventSchedule">
    <div class="container position-relative">
      <div class="row align-items-start">
        <div class="col-12 mb-4">
          <div class="text-center text-white">
            <h3>EVENT SCHEDULE</h3>
            <h2><span>Sessions that are Planned</span></h2>
          </div>
        </div>
        <!-- Schedule tabs and content -->
        <div class="tabMainArea">
          @foreach($eventDays as $day)
          <div class="tablink {{ $loop->first ? 'active' : '' }}"
            onclick="openPage('day{{ $day->id }}', this, '{{ $day->color_code }}')">
            @if($day->subtitle)
            <p>{{ $day->subtitle }}</p>
            @endif
            <h1>{{ $day->title }}</h1>
            <p>{{ $day->date->format('l - d F') }}</p>
            <i class="fa fa-angle-down"></i>
          </div>
          @endforeach
        </div>

        <!-- Tab content -->
        @foreach($eventDays as $day)
        <div id="day{{ $day->id }}" class="tabcontent {{ $loop->first ? 'show' : '' }}">
          <div class="schedule-timeline">
            @foreach($day->agendas as $agenda)
            <div class="timeline-item">
              <div class="timeline-time">
                {{ $agenda->start_time->format('h:i A') }} - {{ $agenda->end_time->format('h:i A') }}
              </div>
              <div class="timeline-content">
                <h3>{{ $agenda->title }}</h3>
                @if($agenda->description)
                <p>{!! $agenda->description !!}</p>
                @endif
                @if($agenda->venue || $agenda->track)
                <div class="event-meta">
                  @if($agenda->venue)
                  <span class="venue">
                    <i class="fas fa-map-marker-alt"></i> {{ $agenda->venue }}
                  </span>
                  @endif
                  @if($agenda->track)
                  <span class="track">
                    <i class="fas fa-stream"></i> {{ $agenda->track }}
                  </span>
                  @endif
                </div>
                @endif
                @if($agenda->speakers->count() > 0)
                <div class="speakers-list">
                  @foreach($agenda->speakers as $speaker)
                  <div class="speaker-item">
                    <img src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" class="speaker-avatar">
                    <div class="speaker-info">
                      <h4>{{ $speaker->name }}</h4>
                      @if($speaker->pivot->role)
                      <span class="role">{{ $speaker->pivot->role }}</span>
                      @endif
                      {{-- <p>{{ $speaker->designation }}</p> --}}
                    </div>
                  </div>
                  @endforeach
                </div>
                @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Registration Section -->
  <section id="registration" class="content-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center">
            <h2>Register Now</h2>
            <p class="lead">Secure your spot at AISS 2025</p>
          </div>
          <!-- Registration form will go here -->
        </div>
      </div>
    </div>
  </section>

  <!-- Sponsors Section -->
  <section class="content-section" id="sponsors">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12">
          <div data-scroll data-scroll-speed="0.5">
            <div class="section-title text-center">
              <h6 style="text-transform: uppercase;">THOSE WHO MAKE AISS 2025 POSSIBLE</h6>
              <h2>Sponsors, Partners & Exhibitors</h2>
            </div>
          </div>
        </div>
        <!-- Sponsors content will go here -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('partials.footer')
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
  }

  .about-title .highlight {
    color: #A56CFF;
  }

  .about-text {
    color: #666;
    line-height: 1.8;
    margin-bottom: 40px;
  }

  .about-buttons {
    display: flex;
    gap: 20px;
  }

  .btn-read-more {
    background-color: #cff300;
    color: #a56cff;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-read-more:hover {
    background-color: #cff300;
    color: #a56cff;
    transform: translateY(-2px);
  }

  .btn-report {
    background-color: #cff300;
    color: #A56CFF;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 500;
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
    color: #ffffff;
    margin-bottom: 10px;
    font-size: 20px;
  }

  .timeline-content p {
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 15px;
  }

  .event-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }

  .event-meta span {
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
    color: #ffffff;
    font-size: 16px;
    margin: 0;
  }

  .speaker-info .role {
    color: #01B380;
    font-size: 12px;
    display: block;
  }

  .speaker-info p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    margin: 0;
  }

  .tablink {
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
    object-fit: cover;
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
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
    z-index: 1;
    opacity: 0;
    animation: fadeInText 1s ease-out forwards;
  }

  .event-date-top {
    font-size: clamp(1.5rem, 3vw, 2.5rem);
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    margin-bottom: 1rem;
    transform: translateY(30px);
    opacity: 0;
    animation: slideUp 0.8s ease-out infinite;
  }

  .city-name {
    font-size: clamp(4rem, 8vw, 12rem);
    color: rgba(255, 255, 255, 0.15);
    font-weight: 800;
    text-transform: none;
    letter-spacing: -2px;
    transform: translateY(30px);
    opacity: 0;
    animation: slideUp 1s ease-out infinite;
  }

  .city-image-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
  }

  .city-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    animation: fadeInImage 2s ease-out forwards;
    transform-origin: bottom;
  }

  @keyframes fadeInText {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes slideUp {
    0% {
      transform: translateY(30px);
      opacity: 0;
    }

    50% {
      transform: translateY(0);
      opacity: 1;
    }

    100% {
      transform: translateY(30px);
      opacity: 0;
    }
  }

  @keyframes fadeInImage {
    0% {
      opacity: 0;
      transform: scale(1.1);
    }

    100% {
      opacity: 1;
      transform: scale(1);
    }
  }

  /* Floating animation for the city image */
  .city-image-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 100%);
    animation: shimmer 3s infinite linear;
  }

  @keyframes shimmer {
    0% {
      transform: translateX(-100%) translateY(-100%) rotate(45deg);
    }

    100% {
      transform: translateX(100%) translateY(100%) rotate(45deg);
    }
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .city-skyline-section {
      height: 70vh;
    }

    .text-overlay {
      left: 5%;
      width: 90%;
    }

    .city-name {
      font-size: clamp(3rem, 6vw, 8rem);
    }
  }

  @media (max-width: 480px) {
    .city-skyline-section {
      height: 50vh;
    }

    .event-date-top {
      font-size: 1.25rem;
    }

    .city-name {
      font-size: clamp(2.5rem, 5vw, 6rem);
    }
  }


  .section-subtitle {
    color: #A56CFF;
    font-size: 14px;
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

  .bf-title {
    font-size: 90px;
    font-weight: 700;
    color: #ffffff;
    line-height: 100px;
    letter-spacing: -3%;
    font-family: 'Space Grotesk', sans-serif;
    text-align: center;
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
    max-width: 1035px;
    /* Accommodates 2 cards with gap (495px * 2 + 45px) */
    margin: 0 auto;
    position: relative;
  }

  .focus-carousel {
    display: flex;
    position: relative;
    transition: transform 0.5s ease-in-out;
    gap: 45px;
    will-change: transform;
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
    transform: scale(0.95);
    opacity: 0.7;
  }

  .focus-card.active {
    transform: scale(1);
    opacity: 1;
  }

  .focus-card-inner {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .carousel-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
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
  }

  .carousel-prev {
    left: -60px;
  }

  .carousel-next {
    right: -60px;
  }

  .carousel-prev:disabled,
  .carousel-next:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  .carousel-prev:not(:disabled):hover,
  .carousel-next:not(:disabled):hover {
    background: #A56CFF;
    transform: translateY(-50%) scale(1.1);
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
    background: rgba(255, 255, 255, 0.3);
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .carousel-dot.active {
    background: #ffffff;
    transform: scale(1.2);
  }

  .carousel-dot:hover {
    background: rgba(165, 108, 255, 0.5);
  }

  @media (max-width: 1680px) {
    .focus-carousel-container {
      max-width: 845px;
      /* Accommodates 2 cards with gap (400px * 2 + 45px) */
    }

    .focus-card {
      flex: 0 0 400px;
      height: 242px;
      padding: 35px 60px;
    }
  }

  @media (max-width: 1366px) {
    .focus-carousel-container {
      max-width: 685px;
      /* Accommodates 2 cards with gap (320px * 2 + 45px) */
    }

    .focus-card {
      flex: 0 0 320px;
      height: 193px;
      padding: 25px 45px;
    }
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
    margin-top: 5px;
  }

  .focus-icon img {
    width: 100%;
    height: auto;
    filter: brightness(0) invert(1);
  }

  .focus-content {
    flex: 1;
  }

  .focus-title {
    font-size: 28px;
    font-weight: 700;
    color: #A56CFF;
    margin-bottom: 15px;
    text-align: left;
  }

  .focus-description {
    color: #A56CFF;
    font-size: 16px;
    line-height: 1.6;
    text-align: left;
  }

  /* Carousel Navigation */
  .carousel-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
  }

  .carousel-dots {
    display: flex;
    gap: 8px;
  }

  .carousel-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .carousel-dot.active {
    background: #A56CFF;
    transform: scale(1.2);
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
  }

  .carousel-prev {
    left: -60px;
  }

  .carousel-next {
    right: -60px;
  }

  .carousel-prev:disabled,
  .carousel-next:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  .carousel-prev:not(:disabled):hover,
  .carousel-next:not(:disabled):hover {
    background: #A56CFF;
    transform: translateY(-50%) scale(1.1);
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
    background: rgba(255, 255, 255, 0.3);
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .carousel-dot.active {
    background: #ffffff;
    transform: scale(1.2);
  }

  .carousel-dot:hover {
    background: rgba(165, 108, 255, 0.5);
  }

  @media (max-width: 991px) {
    .focus-section {
      padding: 80px 0;
    }

    .section-title {
      font-size: 36px;
    }

    .focus-card-inner {
      min-height: 200px;
      padding: 25px;
      gap: 20px;
    }

    .focus-title {
      font-size: 24px;
    }

    .focus-icon {
      width: 60px;
      min-width: 60px;
      height: 60px;
    }
  }

  @media (max-width: 767px) {
    .focus-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 32px;
    }

    .focus-card-inner {
      flex-direction: column;
      min-height: auto;
      padding: 25px;
      gap: 15px;
    }

    .focus-icon {
      width: 60px;
      min-width: 60px;
      height: 60px;
      margin: 0 0 10px 0;
    }

    .focus-title {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .focus-description {
      font-size: 14px;
    }
  }

  /* Add fallback styles in case video fails to load */
  .hero-section.video-fallback {
    background: linear-gradient(135deg, #05102D 0%, #1A2151 100%);
  }

  /* Ensure video covers the entire section */
  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .video-background video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translateX(-50%) translateY(-50%);
    object-fit: cover;
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
    font-size: 14px;
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
    grid-template-columns: repeat(3, 1fr);
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
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
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
    justify-content: center;
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

  // Focus Area Carousel Functionality
  function initFocusCarousel() {
    const carousel = document.querySelector('.focus-carousel');
    const cards = Array.from(document.querySelectorAll('.focus-card'));
    const dotsContainer = document.querySelector('.carousel-dots');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');

    if (!carousel || cards.length === 0) return;

    let currentIndex = 0;
    const visibleCards = 2; // Changed to show 2 cards
    const totalSlides = Math.max(0, cards.length - visibleCards + 1);

    // Clear existing dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';

        // Create dots based on number of possible positions
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
            if (i >= currentIndex && i < currentIndex + visibleCards) {
                card.classList.add('active');
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
            } else {
                card.classList.remove('active');
                card.style.opacity = '0.7';
                card.style.transform = 'scale(0.95)';
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
}

// Initialize carousel when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initFocusCarousel();
});

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

<!-- Three.js Library - Local Version -->
<script src="{{ asset('js/lib/three.min.js') }}"></script>
<!-- Globe animation script -->
<script src="{{ asset('js/globe.js') }}"></script>

<style>
  @keyframes pulse {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.05);
    }

    100% {
      transform: scale(1);
    }
  }

  .pulse {
    animation: pulse 0.5s ease-in-out;
  }
</style>
@endsection
@endsection
