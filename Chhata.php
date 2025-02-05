<!DOCTYPE html>
<html lang="en">

<?php
include 'admin/config.php'; // Ensure this path points to the correct location of config.php

// Fetch properties from the database

// This is for the all propertys
// $result = $conn->query("SELECT * FROM properties");

// This is for the only one property
$sql = "SELECT * FROM properties WHERE city = 'Chhata'";
$result = $conn->query($sql);

if (!$result) {
    die('Error fetching properties: ' . $conn->error);
}
?>

<head>
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
        <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
      
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
       
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
      </head>
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
              <li><a class="dropdown-item" href="#">Chhata</a></li>
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


     <!-- Page Header Start -->
     <section class="image-section">
        <img src="img/2.jpg" alt="Cooking Products" class="w-100" />
      </section>
    <!-- Page Header End -->
   
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
              <a href="#">
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
      </div>



      <!-- There is a image inside the background in style.css -->
      

      <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
       <!-- d-none section -->
      <section class="ENGINEERING secpadding d-none">
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

  
  
    <!-- This is the footer section -->
    <footer id="contact">
      <div class="foot-sec">
        <div class="part">
          <div>
            <ul>
              <li><i class='bx bxs-user-pin' style='color:#f7f4f2'></i><span class="text">VRINDAVAN (MATHURA)</span></li>
              <li><a href="9457271991"><i class='bx bxs-phone' style='color:#f7f4f2'></i><span class="text">+918533874740</span></a></li>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      <!-- <script src="js/form/jquery.validationEngine.js"></script>
      <script src="js/form/jquery.validationEngine-en.js"></script>
      <script src="js/form/script.js"></script>
      <script src="js/form/state.js"></script>
      <link rel="stylesheet" href="js/form/validationEngine.jquery.css" />
      <script src="js/form/courses.js"></script> -->

      <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>