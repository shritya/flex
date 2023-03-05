<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Protein</title>
    <link rel="favicon" href="./assets/favicon-16x16.png" type="faviconx" />
  </head>
  <body>
        <!-- HEADER START -->
        <?php
        include 'header.php';
        ?>
    <section class="navbar">
      <header>
        <nav>
          <div class="nav-left">
            <a href="index.html">
              <h1>SHREE NUTRION</h1>
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
    <!-- HEADER END -->
    <!-- Hero section starts -->
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
    <!-- HERO SECTION END -->
    <!-- PRODUCT SECTION START -->
    <div class="product-adwait">
      <a class="stick" href="https://wa.me/+917887805948"
        ><img class="stick-img" src="./assets/whatsapp.svg" alt=""
      /></a>
      <section class="product-section">
        <h1 class="section-heading">P R O T E I N</h1>
        <section class="product-one">
          <div class="product-card">
            <a class="product-card-2" href="./header.php">
              <img
                src="./assets/1.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Muscletech</h3>
              <h5>
                Nitro Tech
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./hospital-bed.html">
              <img
                src="./assets/2.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./remote-control-wheelchair.html">
              <img
                src="./assets/3.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./oxygen-concentrator.html">
              <img
                src="./assets/4.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./aluminum-wheelchair.html">
              <img
                src="./assets/5.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./toilet-chair.html">
              <img
                src="./assets/6.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./bp-monitor.html">
              <img src="./assets/7.jpg" alt="Product" class="product-img" />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./wheelchair-with-toilet.html">
              <img
                src="./assets/8.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./oxygen-tank.html">
              <img
                src="./assets/9.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./paitent-walker.html">
              <img
                src="./assets/10.JPG"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
          <div class="product-card">
            <a class="product-card-2" href="./walking-stick.html">
              <img
                src="./assets/11.jpg"
                alt="Product"
                class="product-img"
              />
              <h3>Whey Protein</h3>
              <h5>
                Whey 100%
              </h5>
            </a>
          </div>
        </section>
      </section>
    </div>
    <!-- PRODUCT SECTION END HERE -->
    <!-- FOOTER SECTION START HERE -->
          <?php include 'footer.php';
          ?>
    <section class="end">
      <footer>
        
        <a href="index.html">
            <h1>SHREE NUTRION</h1>
           <!-- <img src="./assets/logo.png" alt="Logo" class="logo" /> -->
        </a>
        <div class="adi-footer">
          <section class="link-footer">
            <div class="privacy-policy">
              <h2>Our Links</h2>
              <ul class="links-footer">
                <li>Instagram</li>
                <li>Whatsapp</li>
                <li>Facebook</li>
                <li>Linkedin</li>
              </ul>
            </div>
            <div class="privacy-policy">
              <h2>Our Policy</h2>
              <ul class="links-footer">
                <li>Privacy</li>
                <li>Policy</li>
              </ul>
            </div>
          </section>
          <h4 class="logo-footer-txt">
            SHREE NUTRION|&#169;
            <span class="footer-contact"
              >Contact&nbsp;:&nbsp;+91&nbsp;7887805948 +91&nbsp;7378837011</span
            >
            <span>Address: S. No. 694, Sahakar Bhavan, Adarsh Nagar, Satara Road, Pune - 411037</span>
          </h4>
        </div>
      </footer>
    </section>
  </body>
</html>
