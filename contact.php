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
    <link rel="stylesheet" href="css/style4.css">
    <!--script.js file link -->
    <script src="./js/script.js"></script>
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
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
    <div class="hero-img"id="contact-img">
<h1 class="contact-h1">Contact Us</h1>
  </div>


  <section id="section1">
      <div class="container-gallery py-5">
        <div class="text-center">
          <h2 class="section-title">Richwin Hotel</h2>
          <h1 class="mb-3"style="color:#0076A3;">Write Us Your Message</h1>
        </div>
</section>
<!--contact form-->
<section class="contact-form">
        <div class="contactForm">
        <form action="contact_conn.php" method="post">
         <h1 class="sub-heading">Contact Us</h1>
         <p class="detail detail2">Please write us your message to info.hotelrichwin@gmail.com</p>
         <input type="text" class="input" placeholder="your name" name="name">
         <input type="text" class="input" placeholder="your email" name ="mail">
         <input type="text" class="input" placeholder="your Subject" name = "sub">
         <input type="submit" class="input submit" value="Send Message">
         
        

        </form>

        <div class="map-container">
            <div class="mapBg"></div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.2317654021276!2d80.36906719006845!3d7.551048663738403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3379ad3b2579b%3A0x1a61ca90fe850a7e!2sRichwin%20Hotel!5e0!3m2!1sen!2slk!4v1702315832681!5m2!1sen!2slk" width="100%" height="600" style="border: 2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>
    </div>

    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Location</h1>
                <p class="detail">Hadirawalana ,Ihalagama, Thuriliyagama 60570</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="detail">info.hotelrichwin@gmail.com</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Phone</h1>
                <p class="detail">+94-37-226-3110</p>
            </article>
        </div>
    </div>
   </section>