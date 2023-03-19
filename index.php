<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>restaurant website</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/lightbox.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <!-- header section starts  -->

  <header>
    <a href="#" class="logo"><img src="images/logo.png" alt="" /></a>
    <a href="#" class="logoname">Friendly Cafe</a>

    <div id="menu-bar" class="fas fa-hamburger"></div>

    <nav class="navbar">
      <!-- <section class="navlinks"> -->
      <ul>
        <li><a class="active" href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#menu">menu</a></li>
        <li><a href="#popular">popular</a></li>
        <li><a href="#gallery">gallery</a></li>
        <li>
          <a href="#home">CALL US : <span>+91 8967453765</span></a>
        </li>
        <?php if(isset($_SESSION['user_name'])) : ?>
        <li><a href="./php/ad_page.php">Admin</a></li>
        <li><a href="./php/logout.php">Logout</a></li>
        <?php endif; ?> 
      </ul>
      <div class="navsocial">
        <a href="https://www.facebook.com/"><i class="bx bxl-facebook" style="color: blue"></i></a>
        <a href="https://www.instagram.com/"><i class="bx bxl-instagram" style="color: rgb(246, 6, 74)"></i></a>
        <a
          href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i
            class="bx bxl-twitter" style="color: rgb(4, 165, 218)"></i></a>
      </div>
      <!-- </section> -->
      <!-- <section class="navsocial">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
        </section> -->
    </nav>
  </header>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="home">
    <div class="content" data-aos="fade-right">
      <h3>We belive good food offer great smile</h3>
      <p>
        Food is one part of the experience. And it has to be somewhere between
        50 to 60 percent of the dining experience. But the rest counts as
        well: The mood, the atmosphere, the music, the feeling, the design,
        the harmony between what you have on the plate and what surrounds the
        plate.
      </p>
      <a href="#book"><button class="btn">Book Now</button></a>
    </div>

    <div class="image" data-aos="fade-up">
      <img src="images/image1.jpg" alt="" />
    </div>
  </section>

  <!-- home section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <div class="image" data-aos="fade-right">
      <img src="images/image2.jpg" alt="" />
    </div>

    <div class="content" data-aos="fade-left">
      <h3>a word about us</h3>
      <p>
        We believe in the commitment to our community and in fostering long
        term relationships with local farmers and fishermen. Our menus reflect
        these connections, featuring local, seasonal produce and sustainably
        sourced seafood and meats.
      </p>
      <div>
        <h3 class="working-timings">Working Times</h3>
        <p>
          Monday - Thursday :
          <span>7:00 am - 12:00 pm</span>
        </p>
        <p>
          Friday - Saturday :
          <span>7:00 am - Midnight</span>
        </p>
        <p>
          Saturday - Sunday :
          <span>9:00 am - 12:00 pm</span>
        </p>
      </div>

      <a href="#"><button class="btn">learn more</button></a>
    </div>
  </section>

  <!-- about section ends -->

  <!-- menu section starts -->
  <section class="menu" id="menu">
    <h1 class="heading">our delicious <span>menu</span></h1>

    <ul class="list" data-aos="fade-down">
      <li class="btn" data-src="./images/breakfast1.jpg" data-src="content">breakfast</li>
      <li class="btn active" data-src="./images/90934370.cms" data-src="content-">lunch</li>
      <li class="btn" data-src="./images/dinner.webp">dinner</li>
      <li class="btn" data-src="./images/dessert.jpg">dessert</li>
    </ul>

    <div class="row" data-aos="fade-right">
      <div class="image" data-aos="fade-left">
        <img src="./images/90934370.cms" id="menu-img" alt="" />
      </div>

      <div class="content" data-aos="fade-left">
        <div class="info">
          <div class="info">
            <h3><span>01.</span>sandwich.</h3>
            <p>
              Life is good when you have a good sandwich.
            </p>
          </div>
          <h3><span>02.</span>south indian thali</h3>
          <p>
            It includes rice, dal, vegetables, roti, papad, dahi (yogurt),
            small amounts of chutney or pickle, and a sweet dish to top it
            off.
          </p>
        </div>


        <div class="info">
          <h3><span>03.</span> butter naan</h3>
          <p>The most soft and fluffy naan topped with butter</p>
        </div>

        <div class="info">
          <h3><span>04.</span>Chocolate smoothies </h3>
          <p>
            Chocolate smoothies are a delicious treat for all ages.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- menu section ends -->

  <!-- popular section starts  -->

  <section class="popular" id="popular">
    <h1 class="heading">most <span>popular</span> foods</h1>

    <div class="box-container">

      <?php
        // Database connection
        $conn = mysqli_connect('localhost','root','','test_db');
        
        //
        if(!$conn){
          die("Connection Failed!!!".mysqli_connect_error());
        } 
        else{
          // echo "Connected Successfully!!!";
        }

        // read all data from database products table
        $products = mysqli_query($conn, "SELECT * FROM `products`");

        if(!$products){
          die("Invalid Query !!!".mysqli_connect_error());
        }
        else{
          // read data from table
          while($row = mysqli_fetch_assoc($products)){
            echo"
            <div class='box' data-aos='fade-right'>
              <img src='./php/uploaded_img/$row[image]'/>
              <h3>$row[name]</h3>
              <i class='fas fa-star' style='color:teal; font-size:2rem; padding: 1rem .1rem;'></i>
              <i class='fas fa-star' style='color:teal; font-size:2rem; padding: 1rem .1rem;'></i>
              <i class='fas fa-star' style='color:teal; font-size:2rem; padding: 1rem .1rem;'></i>
              <i class='fas fa-star' style='color:teal; font-size:2rem; padding: 1rem .1rem;'></i>
              <i class='fas fa-star' style='color:teal; font-size:2rem; padding: 1rem .1rem;'></i>
              <div class='price'>Rs.$row[price].00</div>
              <a href='#'><button class='btn'>book now</button></a>
              </div>
            ";
          }
        }
      ?>
      <!-- <div class="box" data-aos="fade-right">
        <img src="./images/indian thalli.avif" alt="" />
        <h3>south indian thali</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <div class="price">Rs.150.00</div>
        <a href="#"><button class="btn">book now</button></a>
      </div>

      <div class="box" data-aos="fade-left">
        <img src="./images/img3.jpg" alt="" />
        <h3>butter naan</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <div class="price">Rs.230.00</div>
        <a href="#book"><button class="btn">book now</button></a>
      </div>

      <div class="box" data-aos="fade-right">
        <img src="./images/img2.jpg" alt="" />
        <h3>biryani</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <div class="price">Rs.300.00</div>
        <a href="#book"><button class="btn">book now</button></a>
      </div>

      <div class="box" data-aos="fade-left">
        <img src="./images/img6.jpg" alt="" />
        <h3>pasta</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <div class="price">Rs.140.00</div>
        <a href="#book"><button class="btn">book now</button></a>
      </div> -->
    </div>
  </section>

  <!-- popular section ends -->

  <!-- gallery section starts -->

  <section class="gallery" id="gallery">
    <h1 class="heading">our food <span>gallery</span></h1>

    <div class="container1">
      <div class="images">
        <a href="./images/img1.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img1.jpg" alt="">
        </a>
        <a href="./images/img2.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img2.jpg" alt="">
        </a>
        <a href="./images/img3.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img3.jpg" alt="">
        </a>
        <a href="./images/img4.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img4.jpg" alt="">
        </a>
        <a href="./images/img5.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img5.jpg" alt="">
        </a>
        <a href="./images/img6.jpg" data-lightbox="pics" data-title="">
          <img src="./images/img6.jpg" alt="">
        </a>
      </div>
    </div>
  </section>

    <script src="./js/lightbox-plus-jquery.js"></script>

    <!-- gallery section ends -->

    <!-- order section starts  -->

    <section class="book" id="book">
      <h1 class="heading">book your <span>seat</span></h1>

      <div class="row">
        <!-- <form class="form" action="./php/register.php" data-aos="fade-right"> -->
        <!-- <form class="form" action="https://formspree.io/f/xpzelral" data-aos="fade-right">-->
        <form action="https://formspree.io/f/xknazbwv" method="POST" data-aos="fade-right">
          <div class="error" style="color: #af4242;
          background-color: #fde8ec;
          padding: 10px;
          transform: translateY(-20px);
          margin-bottom: 20px;
          font-size: 18px;
          display: none;
          margin-top: 20px;"></div>
          <label class="required">Name</label>
          <input type="text" placeholder="e.g John" class="box" name="name" />
          <label class="required">Email</label>
          <input type="email" placeholder="e.g John123@gmail.com" class="box" name="email" />
          <label class="required">No Of Seats</label>
          <input type="number" placeholder="" class="box" name="seats">
          <label>Additional instructions</label>
          <textarea name="instructions" id="" cols="30" rows="10" class="box address"
            placeholder="add instructions"></textarea>
          <input type="submit" value="book now" class="btn" name="submit" />
        </form>

        <div class="image" data-aos="fade-left">
          <img src="images/form-img.jpg" alt="">
          <!-- <img src="./images/img4.jpg" alt="">
          <img src="./images/img5.jpg" alt=""> -->
        </div>
      </div>
    </section>
    <script src="./js/register.js"></script>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <div class="footer">
      <div class="box-container">
        <div class="box">
          <h3>contact info</h3>
          <p><i class="fas fa-map-marker-alt"></i> mumbai, indai 400104</p>
          <p><i class="fas fa-envelope"></i> example@gmail.com</p>
          <p><i class="fas fa-phone"></i> +123-456-7890</p>
          <p><i class="fas fa-phone"></i> +111-222-333</p>
        </div>

        <div class="box">
          <h3>branch location</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">france</a>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="./php/index.php">Admin Login</a>
          <a href="#">home</a>
          <a href="#">about</a>
          <a href="#">menu</a>
          <a href="#">popular</a>
          <a href="#gallery">gallery</a>
          <a href="#book">order</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#">instagram</a>
          <a href="#">facebook</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        create by <a href="#">pravishee design.co</a> all rights reserved.
      </h1>
    </div>

    <!-- aos js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="./js/script.js"></script>

    <!-- initializing aos  -->

    <script>
      AOS.init({
        delay: 400,
        duration: 1000,
      })
    </script>
</body>

</html>