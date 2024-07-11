<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.png"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/ilocos-norte.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ilocos Norte Tour Packages</h3>
            <p>Embark on a captivating journey through Ilocos Norte with our unforgettable tour! From the windswept shores of Pagudpud to the historic Paoay Church, 
               explore breathtaking landscapes and cultural wonders. Indulge in local delicacies, experience warm hospitality, and create lasting memories. Discover 
               the charm of Ilocos Norte with us!
            </p>

            <p>
               <span>Famous Food:</span> Bagnet
               <br>
               <span>Famous place:</span> Bangui Windmills
               <br>
               <span>Accommodation:</span> Ciudad Fernandina Hotel
               <br>
               <span>Attraction:</span> Vigan Heritage Village
            </p>

            <h2>₱8,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ilocos-sur.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ilocos Sur Tour Packages</h3>
            <p>Explore the rich heritage of Ilocos Sur with our exclusive tour! Wander through historic cobblestone streets, marvel at colonial architecture, 
               and visit UNESCO-listed sites like Vigan's Calle Crisologo. Immerse yourself in local culture, savor authentic cuisine, and relax in charming 
               accommodations. Embark on a cultural journey with our Ilocos Sur tour! 
            </p>

            <p>
               <span>Famous Food:</span> Vigan Longganisa
               <br>
               <span>Famous place:</span> Calle Crisologo
               <br>
               <span>Accommodation:</span> Hotel Luna
               <br>
               <span>Attraction:</span> Baluarte
            </p>

            <h2>₱8,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/boracay.jpg" alt="">
         </div>
         <div class="content">
            <h3>Boracay Tour Packages</h3>
            <p>Escape to paradise with our Boracay tour! Discover pristine beaches, crystal-clear waters, and vibrant nightlife. Indulge in local delicacies, 
               water sports, and breathtaking sunsets. Experience luxury accommodations and personalized itineraries tailored to your preferences. Book your 
               unforgettable Boracay getaway today and make memories that last a lifetime!
            </p>

            <p>
               <span>Famous Food:</span> Chori Burger
               <br>
               <span>Famous place:</span> White Beach
               <br>
               <span>Accommodation:</span> Shangri-Las Boracay Resort and Spa
               <br>
               <span>Attraction:</span> Willys Rock
            </p>

            <h2>₱20,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/tagaytay.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tagaytay Tour Packages</h3>
            <p>Experience serenity and scenic beauty on our Tagaytay tour! Marvel at the panoramic views of Taal Volcano and Lake, indulge in local delicacies 
               like bulalo, and relax in cool mountain breezes. Explore charming gardens, enjoy leisurely walks, and unwind in cozy accommodations. Escape to 
               Tagaytay for a tranquil getaway!
            </p>

            <p>
               <span>Famous Food:</span> Bulalo
               <br>
               <span>Famous place:</span> Taal Volcano
               <br>
               <span>Accommodation:</span> Taal Vista Hotel
               <br>
               <span>Attraction:</span> Sky Ranch Amusement Park
            </p>

            <h2>₱5,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bohol.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bohol Tour Packages</h3>
            <p>Experience the magic of Bohol with our unforgettable tour! Discover the iconic Chocolate Hills, cruise along Loboc River, and visit centuries-old 
               churches like Baclayon Church. Dive into the vibrant marine life at Panglao Island, unwind on pristine beaches, and stay in luxury resorts or eco-friendly 
               accommodations!
            </p>

            <p>
               <span>Famous Food:</span> Binagol
               <br>
               <span>Famous place:</span> Chocolate Hills
               <br>
               <span>Accommodation:</span> Pangao Island Resort
               <br>
               <span>Attraction:</span> Panglao Beach
            </p>

            <h2>₱10,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/subic.jpg" alt="">
         </div>
         <div class="content">
            <h3>Subic Tour Packages</h3>
            <p>Discover adventure and relaxation with our Subic tour! Dive into thrilling water sports, explore pristine beaches, and hike lush rainforest trails. Encounter 
               exotic wildlife at Zoobic Safari, unwind at picturesque beaches, and indulge in diverse dining options. Experience Subic's perfect blend of adventure and leisure 
               for your next getaway!
            </p>

            <p>
               <span>Famous Food:</span> Grilled Prawns
               <br>
               <span>Famous place:</span> Subic Bay Freeport Zone
               <br>
               <span>Accommodation:</span> Pangao Island Resort
               <br>
               <span>Attraction:</span> Zoobic Safari
            </p>

            <h2>₱11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pangasinan.png" alt="">
         </div>
         <div class="content">
            <h3>Pangasinan Tour Packages</h3>
            <p>Experience the charm of Pangasinan with our captivating tour! Discover pristine beaches like Hundred Islands, savor local delicacies like 
               "puto" and "pigar-pigar," and visit historic churches. Explore vibrant markets, relax by serene rivers, and stay in cozy accommodations. 
               Immerse yourself in Pangasinan's natural beauty and rich cultural heritage!
            </p>

            <p>
               <span>Famous Food:</span> Pigar-pigar
               <br>
               <span>Famous place:</span> Hundred Islands National Park
               <br>
               <span>Accommodation:</span> Bolinao Beach
               <br>
               <span>Attraction:</span> Lingayen Gulf
            </p>

            <h2>₱15,500</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/baguio.png" alt="">
         </div>
         <div class="content">
            <h3>Baguio Tour Packages</h3>
            <p>Escape to the cool embrace of Baguio with our enchanting tour! Explore lush pine forests, visit iconic sites like Burnham Park and Mines View Park. 
               Indulge in fresh strawberries, savor local delicacies, and shop at bustling markets. Experience Baguio's charm with cozy accommodations and breathtaking 
               mountain vistas!
            </p>

            <p>
               <span>Famous Food:</span> Strawberry Taho
               <br>
               <span>Famous place:</span> Strawberry Farm
               <br>
               <span>Accommodation:</span> Holiday Inn Baguio City Center
               <br>
               <span>Attraction:</span> BenCab Museum
            </p>

            <h2>₱15,500</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/calamba.jpg" alt="">
         </div>
         <div class="content">
            <h3>Calamba Tour Packages</h3>
            <p>Discover the hometown of Jose Rizal with our Calamba tour! Explore historical landmarks like Rizal Shrine and experience the tranquility of hot spring resorts. 
               Indulge in local delicacies, visit scenic parks, and unwind by the serene Laguna de Bay. Immerse yourself in Calamba's rich history and natural beauty!
            </p>

            <p>
               <span>Famous Food:</span> Buko Pie and Espasol
               <br>
               <span>Famous place:</span> Rizal Shrine and House of Rizal
               <br>
               <span>Accommodation:</span> Hot Springs in Pansol
               <br>
               <span>Attraction:</span> Mount Makiling
            </p>

            <h2>₱3,700</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/manila.jpg" alt="">
         </div>
         <div class="content">
            <h3>Manila Tour Packages</h3>
            <p>Immerse yourself in the heart of Manila with our captivating tour! Discover rich history at Intramuros, indulge in diverse cuisine from adobo to 
               halo-halo. Explore vibrant markets, shop along bustling streets, and relax at modern accommodations. Experience Manila's dynamic energy on your 
               unforgettable journey!
            </p>

            <p>
               <span>Famous Food:</span> Adobo and Sisig
               <br>
               <span>Famous place:</span> Intramuros
               <br>
               <span>Accommodation:</span> Luxury Hotels in Bonifacio Global City
               <br>
               <span>Attraction:</span> Nightlife Makati Bars
            </p>

            <h2>₱6,300</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/cebu.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cebu Tour Packages</h3>
            <p>Embark on an unforgettable journey through Cebu with our enriching tour! Dive into pristine waters for world-class diving, explore historic 
               landmarks like Magellan's Cross, and savor local delicacies. Relax on white sandy beaches, experience vibrant nightlife, and stay in luxurious 
               resorts. Discover the beauty and culture of Cebu today!
            </p>

            <p>
               <span>Famous Food:</span> Roast Pig (Lechon)
               <br>
               <span>Famous place:</span> Kwasan Falls
               <br>
               <span>Accommodation:</span> Luxury resorts on Mactan Island
               <br>
               <span>Attraction:</span> White sands of Bantayan Island
            </p>

            <h2>₱27,200</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 09123456789 </a>
         <a href="#"> <i class="fas fa-phone"></i> 09210987654 </a>
         <a href="#"> <i class="fas fa-envelope"></i> nulaguna@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> NU Laguna, Philippines  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> instagram </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> youtube </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>students in nu laguna</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>