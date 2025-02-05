<!DOCTYPE html>
<html lang="en">

<?php
include 'admin/config.php'; // Ensure this path points to the correct location of config.php

// Fetch properties from the database
$result = $conn->query("SELECT * FROM properties LIMIT 6");

if (!$result) {
    die('Error fetching properties: ' . $conn->error);
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>P Properties</title>
  <link rel="icon" href="img/plogo.png" type="favicon"/>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <meta name="description" content="">
  <meta name="keywords" content= "">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/bootstrap-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/animation.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
 

 <!-- This is for the navbar and main carousel banner -->
 <style>
  .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

     /* Top Bar Styling */
     .top-bar {
      font-size: 0.9rem;
    }

    .top-bar .contact-info span {
      margin-right: 15px;
    }

    .top-bar .social-media a {
      font-size: 1.2rem;
      transition: color 0.3s ease;
    }

    .top-bar .social-media a:hover {
      color: #007bff;
    }

    /* Navbar Styling */
    .navbar {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* .logo {
      max-height: 50px;
    } */

    .nav-link {
      color: #333;
      font-weight: 500;
      margin-right: 15px;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #007bff;
    }

    .navbar-toggler {
      border: none;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
      .top-bar .contact-info, 
      .top-bar .social-media {
        text-align: center;
        margin-bottom: 10px;
      }

      .top-bar .contact-info {
        margin-bottom: 10px;
      }

      .top-bar .social-media {
        margin-bottom: 0;
      }

      .nav-link {
        margin-right: 0;
        text-align: center;
        padding: 10px;
      }
    }
 </style>
 <!-- End css here -->
</head>

<body>
   <!-- Top Bar section-->
   <div style="z-index: 99999;" class="top-bar bg-dark text-white py-2">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div class="contact-info text-center text-md-left mb-2 mb-md-0">
        <span>
          <a href="mailto:pproperty@yahoo.com" class="text-white text-decoration-none">
            <i class="bi bi-envelope"></i> pproperty@yahoo.com
          </a>
        </span>
        <span class="ml-3"><i class="bi bi-telephone"> </i><a href="tel:+1234567890" class="text-white text-decoration-none">+918533874740</a></span>
      </div>
      <div class="social-media text-center text-md-right">
        <a href="https://facebook.com" class="text-white text-decoration-none mr-3"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com" class="text-white text-decoration-none mr-3"><i class="bi bi-twitter"></i></a>
        <a href="https://youtube.com" class="text-white text-decoration-none mr-3"><i class="bi bi-youtube"></i></a>
        <a href="https://instagram.com" class="text-white text-decoration-none"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- End Top Bar section -->

 <!-- Navbar section-->
 <nav style="z-index: 99999;" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="img/plogo3.png" alt="Logo" class="logo">
    </a>
    <!-- Hamburger Button for Mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu Items -->
    <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 999;">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="productDropdown">
            <li><a class="dropdown-item" href="vrindavanP1.php">Vrindavan</a></li>
            <li><a class="dropdown-item" href="mathuraP2.php">Mathura</a></li>
            <li><a class="dropdown-item" href="GoverdhanP3.php">Goverdhan</a></li>
            <li><a class="dropdown-item" href="Barsana.php">Barsana</a></li>
            <li><a class="dropdown-item" href="Chhata.php">Chhata</a></li>
            <li><a class="dropdown-item" href="Braj_bhumi.php">Braj bhumi</a></li>
            <li><a class="dropdown-item" href="Nandgaon.php">Nandgaon</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar section -->
    
  <!-- Swiper img banner-->
  <!-- <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/ds.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/dfg.jpg" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div> -->
  <!-- End swiper img banner -->
  

  <!-- This is the particles js banner code  -->

  <!-- particles.js container -->
  <div id="particles-js"></div>
  <!-- stats - count particles -->
   
  <div class="count-particles"> <span class="js-count-particles">--</span> </div>
  <section class="main-banner" >
    <div class="banner-text" >
      <div class="container " data-aos="fade-up" data-aos-duration="2000" >
        <h2> Blessings of <br>
          lord Krishna </h2>
        <div style="z-index: -99;" class="krishnaloadimg"> <img style="z-index: 99;" src="img/plo.png" alt="gla" class="img-fluid"> </div>
        <h1>India's Best Property Investment Place </h1>
        <br>
        <div class="naac">
          Buy Your Dream Property<br>
          Vrindavan | Mathura | Goverdhan | Barsana | Chhata | Nandgaon | Braj bhumi</div>
         <h2> <a href="+91549411"><i class='bx bxs-phone'style='color:#000000'></i><span class="text" style='color:#ffffff'>
         +918533874740 | +917983157350</span></a></h2>
      </div>
    </div>
  </section>
  <!-- <div class="applybtn"><a href="#enquire-now">Enquire Now</a></div> -->
  <!-- End particles js code -->


  <!-- This is the feature section -->
  <div class="list-sal">
    <div class="container">
      <div class="lpa">
        <ul>
          <li>
            <h3><span class="countbk c2">18</span>+</h3>
            <p>Successful Projects</p>
          </li>
          <li>
            <h3><span class="countbk c3">350</span> +</h3>
            <p>Setisfied Customers</p>
          </li>
          <li>
            <h3><span class="countbk c1">35</span>+</h3>
            <p>Developers</p>
          </li>
          <li>
            <h3><span class="countbk c1">300</span>+</h3>
            <p>Channel Partners across India</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End feature section -->


  <!-- This is the gallery section -->
  <section id="about" class="about-university2"><img src="img/premmandirimg.png" alt="gla" class="img-fluid">
    <div class="container">
      <div class="heading">
        <h2> <span>VRINDAVAN</span> </h2>
        <p data-aos="fade-in" data-aos-duration="2000"><strong>Welcome to P Property
            </strong>your trusted guide to real estate in the Braj region, specializes in offering top-notch properties that cater to diverse requirements. From serene residential villas to strategic commercial hubs, we ensure every transaction reflects transparency, trust, and satisfaction. Let us help you find your ideal property today.</p>
      </div>
      <div class="girl" data-aos="fade-right" data-aos-duration="2000"> <img src="https://img.freepik.com/free-psd/3d-house-property-illustration_23-2151682280.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla"
          class="img-fluid"> </div>
      <div class="helmate"> <img src="https://biharijiproperty.com/images/helmate.png" alt="gla" class="img-fluid"> </div>
    </div>
  </section>
  <!-- End gallery section -->


  <!-- This is the sub banner section -->
  <section class="image-section">
    <img src="img/asdf.jpg" alt="p property mata img" class="w-100" />
  </section>
  <!-- End sub banner section -->

  <!-- This is the recent property post section-->
  <section id="product"  class="ftco-section ftco-properties ">
    <div class="container">
      <div class="row justify-content-center mt-6 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Recent Posts</span>
          <h2 class="mb-4">Recent Properties</h2>
        </div>
      </div>
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row justify-content-center mb-5">
        <!-- Card 1 -->
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="properties">
          <a href="./Barsana.php">
            <div class="img"><img style="border-radius: 20px; width: 100%; object-fit:cover;" 
            src="<?php echo htmlspecialchars('admin/' . $row['image_path']); ?>" 
            alt="Property Image"></div>
          </a>
          <div class="text">
          <span class="status <?php echo htmlspecialchars($row['status']); ?>">
              <?php echo htmlspecialchars($row['status']); ?>
          </span>
            <div class="flex">
              <div class="one">
              <h3><a href="#"><?php echo htmlspecialchars($row['title']); ?></a></h3>
              <p><?php echo htmlspecialchars($row['type']); ?> - Flats</p>
              <p><?php echo htmlspecialchars($row['city']); ?></p>
              </div>
              <div class="two">
              <span class="price">₹<?php echo htmlspecialchars($row['price']); ?></span>
              </div>
            </div>
            <p><?php echo htmlspecialchars($row['description']); ?></p>
            <hr>
          </div>
        </div>
        <?php endwhile; ?>
     


      <!-- There is a image inside the background in style.css -->
       <!-- This is the slider image section -->
      <div class="imgSlider"></div>
      <!-- End slider image section -->

      <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
       <!-- d-none section -->
      <section class="ENGINEERING secpadding ">
        <div class="container d-none">
          <div class="heading text-center mb-5" data-aos="zoom-in" data-aos-duration="1500">
            <h2>Discover the Unique <br>
              <strong> Highlights of Our Exclusive Listings	</strong>
            </h2>
          </div>
          <ul class="list1">
            <li> <img src="https://img.freepik.com/free-photo/door-opening-revealing-beautiful-city_23-2149768547.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla" class="img-fluid">
              <h4 data-aos="fade-in" data-aos-duration="1500">Furnished<br>
                Flats </h4>
            </li>
            <li>
              <h4><span data-aos="fade-up" data-aos-duration="1500">Commercial<br>
                  Plots & Land</span> </h4>
            </li>
            <li> <img src="https://biharijiproperty.com/images/cap.jpg" alt="gla" class="img-fluid"> </li>
            <li> <img src="https://img.freepik.com/free-photo/mockup-frames-living-room-interior-with-chair-decorscandinavian-style_41470-5148.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla" class="img-fluid">
              <h4><span>Residential<br>
                  House</span> </h4>
            </li>
          </ul>
          <ul class="list2">
            <li>
              <h4><span data-aos="fade-up" data-aos-duration="1500">Residential
                  & <br>
                  Apartment</span> </h4>
            </li>
            <li>
              <h4><span>Residental<br>
                  Plots</span> </h4>
            </li>
            <li> <img src="https://img.freepik.com/free-photo/neo-brutalism-inspired-building_23-2151004777.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla" class="img-fluid">
              <h4>Resale <br>
                Property<br>
                 </h4>
            </li>
            <li>
              <h4 data-aos="fade-up" data-aos-duration="1500"> Industrial Land</h4>
            </li>
          </ul>
          <ul class="list3">
            <li> <img src="https://img.freepik.com/free-photo/white-orange-house-beside-forest-body-water_198169-40.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla" class="img-fluid">
              <h4><span>Farm <br>
                  House</span> </h4>
            </li>
            <li class="cap2"> <img src="https://biharijiproperty.com/images/cap.jpg" alt="gla" class="img-fluid"> </li>
            <li>
              <h4><span data-aos="fade-up" data-aos-duration="1500">Property <br>
                  Investments</span> </h4>
            </li>
            <li> <img src="https://img.freepik.com/free-photo/3d-rendering-house-model_23-2150799723.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid" alt="gla" class="img-fluid">
              <h4><span data-aos="fade-left" data-aos-duration="1500">Expendable<br>
                  Villa's</span> </h4>
            </li>
          </ul>
        </div>
        </div> 
        <!-- d-none section -->
   </section>
   <!-- End recent property post section -->


    <!-- This is the image carousel section  -->
    <section class="Life ">
      <div class="container">
        <div class="heading mb-5 text-center">
          <h2> <strong> Local Atteraction </strong></h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item"> <video style="width:780px" loop autoplay muted src="https://videoimg.netlify.app/src/p%20property%20video.mp4" alt="gla" class="img-fluid"> </div>
        <div class="item"> <video style="width:250px" loop autoplay muted src="https://videoimg.netlify.app/src/p%20property%20video.mp42.mp4" alt="video" class="img-fluid"> </div>
        <div class="item"> <img style="width:200px" src="img/pproperty img2.jpg" alt="gla" class="img-fluid"> </div>
        <div class="item"> <img  style="width:334px" src="https://biharijiproperty.com/images/slide4.jpg" alt="gla" class="img-fluid"> </div>
        <div class="item"> <img style="width:577" src="https://biharijiproperty.com/images/slide1.jpg" alt="gla" class="img-fluid"> </div>
        <div class="item"> <video style="width:250px" loop autoplay muted src="https://videoimg.netlify.app/src/p%20property%20video.mp43.mp4" alt="gla" class="img-fluid"> </div>
      </div>
    </section>
    <!-- End carousel section -->

    
     <!-- Contact Section -->
     <section id="contact" class="contact section pt-5">

      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <!-- End Google Maps -->

      <div class="container" data-aos="fade">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4 border p-4">
            <div class="info">
              <h3>Get in touch</h3>
              <p>Feel free to reach out to us anytime. We're here to help and answer any questions you may have!</p>

              <div class="info-item d-flex">
                <!-- <i class="bi bi-geo-alt flex-shrink-0"></i> -->
                <div>
                  <h4>Location:</h4>
                  <p>Vrindavan , mathura</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <!-- <i class="bi bi-envelope flex-shrink-0"></i> -->
                <div>
                  <h4>Email:</h4>
                  <p>pproperty@myyhaoo.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <!-- <i class="bi bi-phone flex-shrink-0"></i> -->
                <div>
                  <h4>Call:</h4>
                  <p>+91 8533874740</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7 border p-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row flex-column" style="gap: 28px">
                <div class="">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="text-center pt-4"><button class="bg-secondary text-white" type="submit" style="padding: 10px; font-weight: 400; font-size: larger;">Send Message</button></div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>

      </div>

</section><!-- /Contact Section -->



    <!-- This is the footer section -->
    <footer id="contact">
      <div class="foot-sec">
        <div class="part">
          <div>
            <ul>
              <li><i class='bx bxs-user-pin' style='color:#f7f4f2'></i><span class="text">VRINDAVAN (MATHURA)</span></li>
              <li><a href="9457271991"><i class='bx bxs-phone' style='color:#f7f4f2'></i><span class="text">+918533874740</span></a></li>
              <li><a href="9457271991"><i class='bx bxs-phone' style='color:#f7f4f2'></i><span class="text">+917983157350</span></a></li>
              <li><a href="info@biharijiproperty.com"><span class="text">PPROPERTY@MYYHAOO.COM</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="part-1">
          <h2><span class="text" style='color:#f7f4f2'>P PROPERTY</span></h2>
          <p>Our team of experienced real estate professionals is dedicated to ensuring that your experience with us is not only successful but also enjoyable. We are confident in our ability to match the ideal needs of every client with our offerings. Whether you are a first-time buyer, seasoned investor, or looking to sell your property, we are here to assist you every step of the way.
            </p>
          <ul class="icons">
            <a href="#"><i class='bx bxl-twitter' style='color:#f7f4f2'></i></a>
            <a href="#"><i class='bx bxl-facebook-circle' style='color:#efebe6'></i></span></a>
            <a href="#"><i class='bx bxl-instagram' style='color:#efece9'></i></a>
            <a href="#"><i class='bx bxl-youtube' style='color:#efece9'></i></a>
            <a href="#"><i class='bx bxl-linkedin-square'></i></a>
          </ul>
        </div>
      </div>
      <div class="center">
        <p>Copyright © 2025 reserved By P Property <br>
          <br>
          <span>This website is created by <a href="https://viraladsmedia.com/">viraladsmedia</a></span>
        </p>
      </div>
    </footer>
    <!-- End footer section -->
    
    <!-- This is the whatsapp section -->
    <div class="position-relative" style="z-index: 999;">
      <a class="call" href="tel:+918533874740"><i class="bi bi-telephone"></i></a>
      <a class="whatsapp"
        href="https://api.whatsapp.com/send/?phone=8533874740&text&type=phone_number&app_absent=0"><i
        class="bi bi-whatsapp"></i></a>
  </div>
   <!-- End whatsapp section -->

      <!-- This is the js section -->
      <script src="js/particles.min.js"></script>
      <script src="js/stats.min.js"></script>
      <script src="js/animation.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <!-- End js section -->
     
      <div class="can"></div>
      <script>
        particlesJS("particles-js", {
          "particles": {
            "number": {
              "value": 80,
              "density": {
                "enable": true,
                "value_area": 800
              }
            },
            "color": {
              "value": "#ffffff"
            },
            "shape": {
              "type": "circle",
              "stroke": {
                "width": 8,
                "color": "#f4f4f4"
              },
              "polygon": {
                "nb_sides": 6
              },
              "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
              }
            },
            "opacity": {
              "value": 0.13301962870896147,
              "random": false,
              "anim": {
                "enable": true,
                "speed": 3.03285593934288,
                "opacity_min": 0.193765796124684,
                "sync": false
              }
            },
            "size": {
              "value": 3,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 37.910699241786006,
                "size_min": 0.1,
                "sync": false
              }
            },
            "line_linked": {
              "enable": true,
              "distance": 150,
              "color": "#ffffff",
              "opacity": 0.4,
              "width": 1
            },
            "move": {
              "enable": true,
              "speed": 6,
              "direction": "none",
              "random": false,
              "straight": false,
              "out_mode": "out",
              "bounce": false,
              "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
              }
            }
          },
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "repulse"
              },
              "onclick": {
                "enable": true,
                "mode": "push"
              },
              "resize": true
            },
            "modes": {
              "grab": {
                "distance": 400,
                "line_linked": {
                  "opacity": 1
                }
              },
              "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
              },
              "repulse": {
                "distance": 200,
                "duration": 0.4
              },
              "push": {
                "particles_nb": 4
              },
              "remove": {
                "particles_nb": 2
              }
            }
          },
          "retina_detect": false
        });
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function () {
          stats.begin();
          stats.end();
          if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
          }
          requestAnimationFrame(update);
        };
        requestAnimationFrame(update);;

      </script>

      <script>
        AOS.init();
      </script>

      <script type="text/javascript">
        $('.count ').each(function () {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 6000,
            easing: 'swing',
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });

      </script>

      <!-- validationEngine FORM START -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      <script src="js/form/jquery.validationEngine.js"></script>
      <script src="js/form/jquery.validationEngine-en.js"></script>
      <script src="js/form/script.js"></script>
      <script src="js/form/state.js"></script>
      <link rel="stylesheet" href="js/form/validationEngine.jquery.css" />
      <script src="js/form/courses.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

      
      <!-- custom -->
      <script src="js/custom.js"></script>
      <script>
        AOS.init();
      </script>

<!-- This is for the main carousel -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
      <!-- End main carousel -->
</body>

</html>