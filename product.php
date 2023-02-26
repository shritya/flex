<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="fowler.css">
</head>
<body>
<section class="navbar">
      <header>
        <nav>
          <div class="nav-left">
            <a class="logo-link" href="index.html">
              <h1 class="logo-name">SHREE NUTRITION</h1>
              <!-- <img src="./assets/logo.jpg" alt="Logo" class="logo" /> -->
            </a>
            
          </div>
          <div class="nav-right">

            <ul class="nav-child">
              <li class="rest-pg"><a href="index.html">Home</a></li>
              <li class="rest-pg"><a href="ourservice.html">Our Serivce</a></li>
              <li class="rest-pg"><a href="whoweare.html">Who are we?</a></li>
              <li class="rest-pg"><a href="product.html">All Products</a></li>
            </ul>
          </div>
        </nav>
      </header>
    </section>
</body>
<section class="hero">
      <div class="hero-content">
        <div class="slideshow-container">
          <a href="7.php" class="mySlides fade">
              <img class="hero-image" src="./assets/7.jpg" />
              <div class="banner-txt">COMBAT 100% Whey Ultra Premium</div>
          </a>

          <a href="8.php" class="mySlides fade">
            <img class="hero-image" src="./assets/9.JPG" />
            <div class="banner-txt">Turbo Whey Protein Isolate Whey Protein</div>
          </a>

          <a href="2.php" class="mySlides fade">
            <img class="hero-image" src="./assets/2.JPG" />
            <div class="banner-txt">Prostar 100% Whey Protein</div>
          </a>
        </div>
        <br />

        <div style="text-align: center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <script>
          let slideIndex = 0;
          showSlides();

          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
              slideIndex = 1;
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
        </script>
        <ul class="hero-qualities">
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/bolt_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Power Workout
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/currency_rupee_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Lowest Cost
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/fitness_center_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Great Nutrition
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/sprint_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Muscle Growth
          </li>
        </ul>
      </div>
</section>