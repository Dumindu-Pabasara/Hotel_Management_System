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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!--script.js file link -->
    <script src="./js/script.js"></script>
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
    <section class="hero-img1">
    <h1 class="gallery-h1">Gallery</h1>
</section>

  
<section id="section1">
      <div class="container-gallery py-5">
        <div class="text-center">
          <h2 class="section-title">Richwin Hotel</h2>
          <h1 class="section-title1 mb-3">Stunning Images Gallery</h1>
        </div>

        <!--Gallery-->
<div class="gallery">
  <a href="img/image1.jpg"data-lightbox="roadtrip" data-title="First Image">
  <img src="img/image1.jpg" alt=""/>
</a>

<a href="img/image3.jpg"data-lightbox="roadtrip" data-title="Second Image">
  <img src="img/image3.jpg" alt=""/>
</a>

<a href="img/image8.jpg"data-lightbox="roadtrip" data-title="Thired Image">
  <img src="img/image8.jpg" alt=""/>
</a>

<a href="img/image11.jpg"data-lightbox="roadtrip" data-title="Four Image">
  <img src="img/image11.jpg" alt=""/>
</a>

<a href="img/image2.jpg"data-lightbox="roadtrip" data-title="Five Image">
  <img src="img/image2.jpg" alt=""/>
</a>

<a href="img/tabel3.jpg"data-lightbox="roadtrip" data-title="Six Image">
  <img src="img/tabel3.jpg" alt=""/>
</a>

<a href="img/galleryhero.jpg"data-lightbox="roadtrip" data-title="Seven Image">
  <img src="img/galleryhero.jpg" alt=""/>
</a>

<a href="img/hcard1.jpg"data-lightbox="roadtrip" data-title="Eight Image">
  <img src="img/hcard1.jpg" alt=""/>
</a>

<a href="img/service.jpg"data-lightbox="roadtrip" data-title="Nain Image">
  <img src="img/service.jpg" alt=""/>
</a>

<a href="img/hcard2.jpg"data-lightbox="roadtrip" data-title="Ten Image">
  <img src="img/hcard2.jpg" alt=""/>
</a>

</div>
</div>

<!--Footer section-->

<div class="container-fluid bg-dark text-light footer pt-3 mt-3" id="footer">
  <div class="conteiner py-5">
    <div class="row g-3">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3"> Company</h4>
        <a href="" class="btn btn-link"> About Us</a>
        <a href="" class="btn btn-link"> Contact Us</a>
        <a href="" class="btn btn-link"> Privacy Policy</a>
        <a href="" class="btn btn-link"> Terms & Condition</a>
        <a href="" class="btn btn-link"> FAQ</a>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Contact</h4>
        <p class="mb-2"><i class="fa fa-map-marked-alt me-3"></i>Hadirawalana ,Ihalagama, Thuriliyagama 60570</p>
        <p class="mb-2"><i class="fa-solid fa-phone-volume me-3"></i>+94-37-226-3110</p> 
        <p class="mb-2"><i class="fa-solid fa-envelope-open me-3"></i>info.hotelrichwin@gmail.com</p>