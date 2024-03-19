<?php 

include 'dbconn.php';

$sql = 'SELECT category_id, category_name FROM public."Category"';
$result = pg_exec($conn, $sql);

// if ($result) {
//     // Loop through the categories and generate options
//     while ($row = pg_fetch_assoc($result)) {
//         echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
//     }
// } else {
//     echo '<option value="">Error fetching categories</option>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Directory</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/logoME2.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logoME2.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="Directory.html"><span>Directories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Directory.html">Stores</a></li>
              <li><a href="facility.html">Facilities</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="event-promotion.html">Events & Promotion</a></li>
          <li><a class="nav-link scrollto" href="about-us.html">About Us</a></li>
          <li><a class="nav-link scrollto" href="login.html">Login</a></li>
          <li><a class="nav-link scrollto" href="#searchtoggle"><img src="assets/img/search.svg"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Queensbay Mall Directory</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="Directory.php">Directory</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="searchBar-category">
      <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/fnb.png" class="img-fluid">
              <p>Food & Beverages</p>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/fashion.png" class="img-fluid" alt="Fashion">
              <p>Fashion & Acessories</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/houseware-furnishing.png" class="img-fluid" alt="Houseware and Furnishing">
              <p>Houseware & Furnishing</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/amenity.png" class="img-fluid" alt="Amenity">
              <p>Amenities</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/gadget-computer.png" class="img-fluid" alt="Gadget and Computer">
              <p>Computers, Mobile & Digital</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
            <div class="category-icon d-block">
              <img src="assets/img/category/entertainment.png" class="img-fluid" alt="Entertainment">
              <p>Entertainment & Leisure</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="row align-items-center">
          <div class="col-sm-8">
            <!-- Search Bar -->
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
          <div class="col-sm-4">
            <!-- Category Options -->
            <select class="category-select">
              <option selected>Choose Category...</option>
              <!-- displaying categories from database -->
              <?php 
              if ($result) {
                while ($row = pg_fetch_assoc($result)) {
                    echo '<option value= "' . $row['category_id']. '">' . $row['category_name']. '</option>';
                }
              } else {
                echo '<option value =""> Error fetching categories </option>';
              }
              ?>

            </select>
          </div>
        </div>
      </div>
    </section>

    <section class="store-section" style="background-color: #f0b685 ;">
      <div class="container">
        <div class="row" id="store-cards">
          <div class="col-lg-3 col-md-3 col-3 card">
            Store 1
            <img id="dir-img" src="" alt="dir-image"></img>
          </div>

          <!-- Store cards will be dynamically added here -->
        </div>
        <div class="pagination" id="pagination">
          <!-- Pagination buttons will be dynamically added here -->
        </div>
      </div>
    </section>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="font-weight: bold;">Queensbay Mall</h3>
            <p>
              Great place for connecting with people!
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MallExplorer - Queensbay Mall</h3>
            <p>
              100 Persiaran Bayan Indah  <br>
              11900 Bayan Lepas,<br>
              Pulau Pinang <br><br>
              <strong>Phone:</strong> +604-6198989<br>
              <strong>Email:</strong> talk2us@queensbaymall.com.my<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Do connnect with us through our social media platform!</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>2024 MallExplorer</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-analytics.js";
  import { getStorage, ref, getDownloadURL} from "https://www.gstatic.com/firebasejs/10.9.0/firebase-storage.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyD5_FOttP_jbdoB1JlqRF7f-tfmI2Wvm6I",
    authDomain: "me-fyp.firebaseapp.com",
    projectId: "me-fyp",
    storageBucket: "me-fyp.appspot.com",
    messagingSenderId: "50852366936",
    appId: "1:50852366936:web:6199041c9c062ebf84582d",
    measurementId: "G-YJ49NT80MV"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const storage = getStorage(app);

  const imageRef = ref(storage, 'images');
  const store1 = ref(storage, 'ben-cookies-1.jpg');

  getDownloadURL(store1).then((url) => {
    // Set the image src attribute with the download URL
    const img = document.getElementById('dir-img');
    img.setAttribute('src', url);
}).catch((error) => {
    // Handle any errors
    console.error('Error getting download URL:', error);
});
</script>

</body>
</html>