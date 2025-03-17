<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Richwin</title>
     <!--Icon font stylesheet-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <!--boostrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Swiper from CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--Gogale font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--script.js file link -->
    <script > /* document.addEventListener("DOMContentLoaded", function() {
      var animatedImage = document.getElementById("animatedImage");

      window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var imagePosition = animatedImage.offsetTop;

        if (scrollPosition > imagePosition - windowHeight / 2) {
          animatedImage.style.opacity = 1;
        }
      });
    }); */

    document.addEventListener("DOMContentLoaded", function() {
      var animatedImage = document.getElementById("animatedImage");

      window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var imagePosition = animatedImage.offsetTop;

        if (scrollPosition > imagePosition - windowHeight / 2) {
          animatedImage.style.opacity = 1;
          animatedImage.style.transform = "translateY(0)";
        }
      });
    });
     </script>
</head>
<body>  

<!--Main Navbar-->
<div class="container-fluid position-relative p-0">
     <div class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" id="navbar">
     <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="80" height="80" class="d-inline-block hotel align-bottem ">
                Richwin Hotel
            </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarcollapse"
      aria-controls="#navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end"id="navbarcollapse">
        <div class="navbar-nav justify-content-end ms-auto py-0">
          <a href="home.php"class="nav-item nav-link font-weight-bold active">Home</a>
          <a href="accommodation.php"class="nav-item nav-link font-weight-bold">Accommodation</a>
          <a href="weddings.php"class="nav-item nav-link font-weight-bold">Weddings</a>
          <a href="gallery.php"class="nav-item nav-link font-weight-bold">Gallery</a>
          <a href="service.php"class="nav-item nav-link font-weight-bold">Other Service</a>
          <a href="contact.php"class="nav-item nav-link font-weight-bold">Contact</a>
        </div>
        </div>
        </div>

        <!--Hero Section-->

      <!--First Carousel start-->
      <div id="carouselExample1" class=" carousel slide  d-block d-lg-flex" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home3.jpg" class="d-block w-100"id="carousel-img" style="background-position: center; background-size: cover; height: 100vh;" alt="">
      <div class="carousel-caption carousel-caption-overlay"id="animatedOverlay">
        <h1 class="carousel-h1">Welcome to Richwin Hotel</h1>
        <p class="text-p">We offers you the best modern facilities with blennded with hospitality</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home2.jpg" class="d-block w-100"id="carousel-img" style="background-position: center; background-size: cover; height: 100vh;" alt="">
      <div class="carousel-caption carousel-caption-overlay"id="animatedOverlay">
        <h1 class="carousel-h1">Welcome to Richwin Hotel</h1>
        <p class="text-p">We offers you the best modern facilities with blennded with hospitality</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home1.jpg" class="d-block w-100"id="carousel-img" style="background-position: center; background-size: cover; height: 100vh;" alt="">
      <div class="carousel-caption carousel-caption-overlay"id="animatedOverlay">
        <h1 class="carousel-h1">Welcome to Richwin Hotel</h1>
        <p class="text-p">We offers you the best modern facilities with blennded with hospitality</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>