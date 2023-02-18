
<section class="hero">
      <div class="hero-content">
        <style>
         
          </style>
          </head>
          <body>
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <img class="hero-image" src="./assets/7.jpg">
            <!-- <div class="text">Caption Text</div> -->
          </div>
          
          <div class="mySlides fade">
            <img class="hero-image" src="./assets/9.JPG">
            <!-- <div class="text">Caption Two</div> -->
          </div>
          
          <div class="mySlides fade">
            <img class="hero-image" src="./assets/2.JPG">
            <!-- <div class="text">Caption Three</div> -->
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
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
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>
        <!-- <img src="./assets/hero-img.webp" alt="HERO IMAGE" class="hero-img" /> -->
        <ul class="hero-qualities">
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/bolt_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Cash On Delivery
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/currency_rupee_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Clean Equipment
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/fitness_center_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Low Deposit
          </li>
          <li class="quality-service">
            <img
              class="quality-img"
              src="./assets/sprint_FILL0_wght400_GRAD0_opsz48.svg"
              alt="S"
            />Low Rent
          </li>
        </ul>
      </div>
    </section>