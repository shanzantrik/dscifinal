<!-- Preloader -->
<div class="preloader">
  <div class="inner">
    <div class="rubiks-cube-loader">
      <div class="cube">
        <!-- Front face -->
        <div class="face front">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
        <!-- Back face -->
        <div class="face back">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
        <!-- Right face -->
        <div class="face right">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
        <!-- Left face -->
        <div class="face left">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
        <!-- Top face -->
        <div class="face top">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
        <!-- Bottom face -->
        <div class="face bottom">
          <div class="grid">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="percentage" id="percentage">0</div>
    <div class="loading-text">Loading<span class="dots">...</span></div>
  </div>
  <div class="loader-progress" id="loader-progress"></div>
</div>

<style>
  .preloader {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index: 99999;
    background: #A56CFF;
    background: linear-gradient(135deg, #A56CFF 0%, #5c4e60 100%);
    transition: all 0.5s ease;
  }

  .preloader .inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  /* Rubik's Cube Loader */
  .rubiks-cube-loader {
    width: 150px;
    height: 150px;
    perspective: 400px;
    margin-bottom: 20px;
  }

  .cube {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    animation: rotate 6s linear infinite;
  }

  .face {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 1fr);
    gap: 4px;
    width: 90%;
    height: 90%;
  }

  .square {
    background: #d0f300;
    border-radius: 2px;
    border: 1px solid rgba(0, 0, 0, 0.1);
  }

  /* Face Transformations */
  .front {
    transform: translateZ(75px);
  }

  .back {
    transform: translateZ(-75px) rotateY(180deg);
  }

  .right {
    transform: translateX(75px) rotateY(90deg);
  }

  .left {
    transform: translateX(-75px) rotateY(-90deg);
  }

  .top {
    transform: translateY(-75px) rotateX(90deg);
  }

  .bottom {
    transform: translateY(75px) rotateX(-90deg);
  }

  @keyframes rotate {
    0% {
      transform: rotateX(0) rotateY(0) rotateZ(0);
    }

    100% {
      transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
    }
  }

  /* Percentage and Loading Text */
  .percentage {
    font-size: 48px;
    font-weight: 700;
    color: #ffffff;
    margin: 20px 0 10px;
    font-family: 'Poppins', sans-serif;
  }

  .loading-text {
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: 'Poppins', sans-serif;
  }

  .dots {
    display: inline-block;
    animation: dots 1.5s infinite;
  }

  @keyframes dots {

    0%,
    20% {
      content: '.';
    }

    40% {
      content: '..';
    }

    60% {
      content: '...';
    }

    80%,
    100% {
      content: '';
    }
  }

  /* Progress Bar */
  .loader-progress {
    width: 200px;
    height: 3px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
    margin-top: 20px;
    overflow: hidden;
    position: relative;
  }

  .loader-progress::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, transparent, #d0f300, transparent);
    animation: moveRight 1.5s ease-in-out infinite;
  }

  @keyframes moveRight {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  @media (max-width: 767px) {
    .rubiks-cube-loader {
      width: 120px;
      height: 120px;
    }

    .front {
      transform: translateZ(60px);
    }

    .back {
      transform: translateZ(-60px) rotateY(180deg);
    }

    .right {
      transform: translateX(60px) rotateY(90deg);
    }

    .left {
      transform: translateX(-60px) rotateY(-90deg);
    }

    .top {
      transform: translateY(-60px) rotateX(90deg);
    }

    .bottom {
      transform: translateY(60px) rotateX(-90deg);
    }

    .percentage {
      font-size: 36px;
    }

    .loading-text {
      font-size: 16px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const percentage = document.getElementById('percentage');
    const progress = document.getElementById('loader-progress');
    let count = 0;

    // Make sure progress bar is visible
    progress.style.display = 'block';
    progress.style.visibility = 'visible';
    progress.style.opacity = '1';

    const interval = setInterval(() => {
      count++;
      percentage.textContent = count;

      if (count >= 100) {
        clearInterval(interval);
        setTimeout(() => {
          document.querySelector('.preloader').style.opacity = '0';
          setTimeout(() => {
            document.querySelector('.preloader').style.display = 'none';
          }, 500);
        }, 500);
      }
    }, 20);
  });
</script>
