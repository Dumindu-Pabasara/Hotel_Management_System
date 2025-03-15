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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=DM+Serif+Display&family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!--Stylesheet link-->
    <link rel="stylesheet" href="css/style.css">
    <!--script.js file link -->
    <script>
       document.addEventListener("DOMContentLoaded", function() {
      var animatedRoom = document.getElementById("animatedRoom");

      window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var imagePosition = animatedRoom.offsetTop;

        if (scrollPosition > imagePosition - windowHeight / 2) {
          animatedRoom.style.opacity = 1;
          animatedRoom.style.transform = "translateY(0)";
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

        <!--Section hero-->
    <div class="hero-img"id="accomadationhero-img">
<h1 class="accomadation-h1">Accomadation</h1>
  </div>
          
   


   <!--room-->
   <section id="section1">
      <div class="container-gallery py-5">
        <div class="text-center">
          <h2 class="section-title">Richwin Hotel</h2>
          <h1 class="mb-3"style="color:#0076A3;">Our Room</h1>
        </div>
</section>

   <div class="container p-5"id="our-room">
    <div class="row g-4">
       
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
        <img src="img/room1.jpg" class="card-img-top" alt="">
    <div class="card-body">
    <h5>Single</h5>

    <!--<h6 class="mb-4">₹ 1,435</h6>-->
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Double Bed
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Free Wi-Fi
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Interconnected Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Room Service
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Study Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Mineral Water
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Housekeeping
    </span>
</div>