<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
/*      .menu-open {*/
/*overflow: hidden;*/
/*      }*/
    </style>
</head>
<body id="main-body">
     <!-- home nav  -->
    
    <section class="home">
      <nav>
          <div class="home-head-nav">
              <div class="nv-logo">
                  <img src="./src/images/logo.png" alt="">
              </div>
              <div class="nav-links-wrap">
                  <div>
                      <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="projects.php">Our Projects</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                  </div>
                  <div class="nv-menuicon" onclick="toggleMenu()">
                      <img src="./src/images/nv-menuicon.svg" alt="">
                  </div>
              </div>
          </div>
          <div class="responsive-menu" style="display: none;">
              <!-- Close button in the top right -->
              <a class="close-button" onclick="toggleMenu()">
                  <span class="close-icon"></span>
              </a>
              
              <!-- Menu items -->
              <a class="mob-nav-headings" href="index.html">Home</a>
              <a class="mob-nav-headings" href="about.html">About Us</a>
              <a class="mob-nav-headings" href="projects.php">Our Projects</a>
              <a class="mob-nav-headings" href="contact.html">Contact Us</a>
              <a href="env-friendly.html">Environmental friendly</a>
              <a href="multi-cultural.html">Muti cultural designs</a>
              <a href="house-hold.html">New house hold</a>
              <a href="heritage.html">Heritage a new concern</a>
          </div>
          
      </nav>
     
  </section>
    <!-- home nav ends  -->

    <!-- section 1 starts -->
    <section class="project-sec1">
    
        <div class="project-sec1-sub">
          <div class="home-cloud">
            <img src="./src/images/home-cloud.png" alt="">
         </div>
            <div class="head-project-sec1">
                <h3>Our</h3>
                <h3> Projects</h3>
            </div>
           <div class="sec1-proj" data-aos="zoom-in-up" data-aos-duration="3000">
            <img src="./src/images/our-projects/project-cover.png" alt="">
           </div>
        </div>
    </section>
    <!-- section 1 ends -->

    <!--  section 2 starts completed -->

    <section class="sec2-completed">
      <div class="home-cloud">
        <img src="./src/images/home-cloud.png" alt="">
     </div>
        <h3>Completed Projects</h3>
       

        <div id="container">
          <div id="sidebar">
            <!--<img src="./src/images/our-projects/completed/ktk-hos1-big.png" onclick="openTab('tab1')" alt="Image 1">-->
            <!--<img src="./src/images/our-projects/completed/ktk-hospital-2-big.png" onclick="openTab('tab2')" alt="Image 2">-->
            <!--<img src="./src/images/our-projects/completed/ktk-hospital-3-big.png" onclick="openTab('tab3')" alt="Image 3">-->
            <!--<img src="./src/images/our-projects/completed/ktk-hospital-4-big.png" onclick="openTab('tab4')" alt="Image 4">-->
            <!--<img src="./src/images/our-projects/completed/rk-1-big.png" onclick="openTab('tab5')" alt="Image 5">-->
            
                    <?php 
                                                                    
                        include "admin/conn.php";
                                                                     
                        $query="select * from projects WHERE project_name='Completed Projects'";
                        $result=mysqli_query($conn,$query);
                        
                        if (mysqli_num_rows($result) > 0) {
                              $counter = 1;                                             
                        while ($row = mysqli_fetch_assoc($result)) { 
                        
                        $project_img = $row['image_url'];
                        $activeClass = ($counter === 1) ? 'active' : ''; // Add 'active' class to the first image                                                
                    ?> 
                    
                   <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Image Project"  onclick="openTab('tab<?=$counter?>')"> 
            
                      <?php
                        $counter++;
                        }
                    }
                ?>
                    
                    
          </div>
        
          <div id="content">
            <!--<div id="tab1" class="tab-content active">-->
            <!--  <img src="./src/images/our-projects/completed/ktk-hos1-big.png" alt="Image 1">-->
              
            <!--</div>-->
            <!--<div id="tab2" class="tab-content">-->
            <!--  <img src="./src/images/our-projects/completed/ktk-hospital-2-big.png" alt="Image 2">-->
              
            <!--</div>-->
            <!--<div id="tab3" class="tab-content">-->
            <!--  <img src="./src/images/our-projects/completed/ktk-hospital-3-big.png" alt="Image 3">-->
              
            <!--</div>-->
            <!--<div id="tab4" class="tab-content">-->
            <!--  <img src="./src/images/our-projects/completed/ktk-hospital-4-big.png" alt="Image 4">-->
              
            <!--</div>-->
            <!--<div id="tab5" class="tab-content">-->
            <!--  <img src="./src/images/our-projects/completed/rk-1-big.png" alt="Image 5">-->
              
            <!--</div>-->
            
                    <?php 
                                                                    
                        include "admin/conn.php";
                        $query="select * from projects WHERE project_name='Completed Projects'";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0) {
                            $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $project_img = $row['image_url'];
                        $activeClass = ($counter === 1) ? 'active' : ''; // Add 'active' class to the first tab
                    ?>             
            
            <div id="tab<?=$counter?>" class="tab-content <?php echo $activeClass; ?>">
                  <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Project Image">
            </div>    
                
            <?php 
            $counter++;
            } } ?>
          </div>
          
          
        </div>
       
        
    </section>
    <!--  section 2 ends completed -->


    <!-- section 3 on going starts -->
    <section class="sec3-on-going">
      <div class="home-cloud">
        <img src="./src/images/home-cloud.png" alt="">
     </div>
      <h3> On Going Projects</h3>


            <div class="swiper-container">
              <div class="swiper-wrapper">
                  <!-- Slide 1 -->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img1.png" alt="Image 1">-->
              <!--    </div>-->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img2.png" alt="Image 2">-->
              <!--    </div>-->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img3.png" alt="Image 3">-->
              <!--    </div>-->
                  <!-- Slide 2 -->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img4.png" alt="Image 4">-->
              <!--    </div>-->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img5.png" alt="Image 5">-->
              <!--    </div>-->
              <!--    <div class="swiper-slide">-->
              <!--        <img src="./src/images/our-projects/On-going-real/img6.png" alt="Image 6">-->
              <!--    </div>-->
              <!--    <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img7.png" alt="Image 1">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img8.png" alt="Image 2">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img9.png" alt="Image 3">-->
              <!--  </div>-->
                <!-- Slide 2 -->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img10.png" alt="Image 4">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img11.png" alt="Image 5">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img12.png" alt="Image 6">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--    <img src="./src/images/our-projects/On-going-real/img13.png" alt="Image 6">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--      <img src="./src/images/our-projects/On-going-real/img14.png" alt="Image 6">-->
              <!--  </div>-->
              <!--  <div class="swiper-slide">-->
              <!--    <img src="./src/images/our-projects/On-going-real/img15.png" alt="Image 6">-->
              <!--</div>-->
              
                    <?php 
                                                                    
                        include "admin/conn.php";
                        $query="select * from projects WHERE project_name='Ongoing Projects'";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $project_img = $row['image_url'];

                    ?>                     
                    
                    <div class="swiper-slide">
                        <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Image 1">
                    </div>
                    
                     <?php  } } ?>
                     
                  <!-- Add more slides as needed -->
              </div>
              <!-- Add Pagination -->
              <!-- <div class="swiper-pagination"></div> -->
              <!-- Add Navigation -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>
    </section>
    <!-- section 3 on going ends -->


    <!-- sention 4 upcoming projects starts -->
        <section class="upcoming-projects-sec4">
      <div class="home-cloud">
        <img src="./src/images/home-cloud.png" alt="">
     </div>
      <h3>Up Coming Projects</h3>

      <div class="accordion-container">
        <div class="bottom-contents">
          <img class="image" src="./src/images/our-projects/ongoing/big1.png" alt="Image 1">
          <img class="image" src="./src/images/our-projects/ongoing/big2.png" alt="Image 2">
          <img class="image" src="./src/images/our-projects/ongoing/big3.png" alt="Image 3">
          <img class="image" src="./src/images/our-projects/ongoing/big4.png" alt="Image 4">
          <img class="image" src="./src/images/our-projects/ongoing/big5.png" alt="Image 5">
        </div>
      </div>
      
      <div class="tab-bar-container">
        <div class="tab-bar">
          <div class="tab" onclick="showContent(0)"><img src="./src/images/our-projects/ongoing/big1.png" alt=""></div>
          <div class="tab" onclick="showContent(1)"><img src="./src/images/our-projects/ongoing/big2.png" alt=""></div>
          <div class="tab" onclick="showContent(2)"><img src="./src/images/our-projects/ongoing/big3.png" alt=""></div>
          <div class="tab" onclick="showContent(3)"><img src="./src/images/our-projects/ongoing/big4.png" alt=""></div>
          <div class="tab" onclick="showContent(4)"><img src="./src/images/our-projects/ongoing/big5.png" alt=""></div>
        </div>
      </div>
    </section>

    <!-- sention 4 upcoming projects ends -->

    
    
    
    
    
    
    <!-- section 3 on going starts -->


    <!-- mobile completed starts -->
   <div class="swiper-mobile">
      <section class="mob-sec3-on-going">
      
        <h3>Completed Projects</h3>


              <div class="mob-swiper-container">
                <div class="swiper-wrapper">
                    
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/completed/ktk-hos1.png" alt="Image 1">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/completed/ktk-hospital-2.png" alt="Image 2">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/completed/ktk-hospital-3.png" alt="Image 3">-->
                    <!--</div>-->
                    
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/completed/ktk-hospital-4.png" alt="Image 4">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/completed/rk-1.png" alt="Image 5">-->
                    <!--</div>-->
                    
                    <?php 
                                                                    
                        include "admin/conn.php";
                        $query="select * from projects WHERE project_name='Completed Projects'";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $project_img = $row['image_url'];

                    ?>                     
                    
                    <div class="swiper-slide">
                        <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Image 1">
                    </div>
                    
                     <?php  } } ?>
                    <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
      </section>
   </div>
    <!-- mobile completed ends -->


    <!-- mobile on going  starts -->
    <div class="swiper-mobile">
      <section class="mob-sec3-on-going">
      
        <h3> On Going Projects</h3>


              <div class="mob-swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img1.png" alt="Image 1">-->
                <!--    </div>-->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img2.png" alt="Image 2">-->
                <!--    </div>-->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img3.png" alt="Image 3">-->
                <!--    </div>-->
                    <!-- Slide 2 -->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img4.png" alt="Image 4">-->
                <!--    </div>-->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img5.png" alt="Image 5">-->
                <!--    </div>-->
                <!--    <div class="swiper-slide">-->
                <!--        <img src="./src/images/our-projects/On-going-real/img6.png" alt="Image 6">-->
                <!--    </div>-->
                <!--    <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img7.png" alt="Image 1">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img8.png" alt="Image 2">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img9.png" alt="Image 3">-->
                <!--  </div>-->
                  <!-- Slide 2 -->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img10.png" alt="Image 4">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img11.png" alt="Image 5">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img12.png" alt="Image 6">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--    <img src="./src/images/our-projects/On-going-real/img13.png" alt="Image 6">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--      <img src="./src/images/our-projects/On-going-real/img14.png" alt="Image 6">-->
                <!--  </div>-->
                <!--  <div class="swiper-slide">-->
                <!--    <img src="./src/images/our-projects/On-going-real/img15.png" alt="Image 6">-->
                <!--</div>-->

                    <?php 
                                                                    
                        include "admin/conn.php";
                        $query="select * from projects WHERE project_name='Ongoing Projects'";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $project_img = $row['image_url'];

                    ?>                     
                    
                    <div class="swiper-slide">
                        <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Image 1">
                    </div>
                    
                     <?php  } } ?>

                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
      </section>
   </div>
    <!-- mobile on going ends -->
    
    <!-- mobile upcoming  starts -->
    <div class="swiper-mobile">
      <section class="mob-sec3-on-going">
      
        <h3>Up Coming Projects</h3>


              <div class="mob-swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/ongoing/big1.png" alt="Image 1">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/ongoing/big2.png" alt="Image 2">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/ongoing/big3.png" alt="Image 3">-->
                    <!--</div>-->
                    <!-- Slide 2 -->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/ongoing/big4.png" alt="Image 4">-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <img src="./src/images/our-projects/ongoing/big5.png" alt="Image 5">-->
                    <!--</div>-->
                    
                    <?php 
                                                                    
                        include "admin/conn.php";
                        $query="select * from projects WHERE project_name='Upcoming Projects'";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $project_img = $row['image_url'];

                    ?>                     
                    
                    <div class="swiper-slide">
                        <img src="admin/upload/gallery_uploads/<?=$project_img?>" alt="Image 1">
                    </div>
                    
                     <?php  } } ?>                    
                    
                    <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
      </section>
   </div>
    <!-- mobile upcoming ends -->









  



    <!-- home footer starts -->
    <section class="project-footer">
      <div class="home-footer-lastsec">
          <img src="./src/images/logo.png" alt="">
          <div class="home-footer-headings">
              <h5><a href="index.html"> Home</a></h5>
              <h5><a href="about.html">About Arcade group</a></h5>
              <h5><a href="projects.php">Our Projects</a></h5>
              <h5><a href="contact.html">Contact us</a></h5>
          </div>
          <div class="home-footer-headings">
              <h5><a href="multi-cultural.html">Multi cultural designs</a></h5>
              <h5><a href="env-friendly.html">Environmental friendly</a></h5>
              <h5><a href="house-hold.html">Nuclear family and new house hold</a></h5>
              <h5><a href="heritage.html">Heritage a new concern</a></h5>
          </div>

          <div class="add-details">
              <div class="footer-email">
                <div class="email-email">
                  <img src="./src/images/footer-icons/email.png" alt="">
                  <h4>Email</h4>
                </div>
                  <h3>mail@arcadegroup.in</h3>
              </div>
              <div class="footer-email">
                  <div class="email-email">
                  <img src="./src/images/footer-icons/phone.png" alt="">
                  <h4>Phone</h4>
                  </div>
                  <h3>Vinod kumar.k:9447074290</h3>
                  <h3>Santhosh  kumar.k:9447011472</h3>
              </div>
          </div>
      </div>
      <div class="flow-footer">
          <h2>ARCADE GROUP . ARCADE GROUP . ARCADE GROUP .ARCADE GROUP . ARCADE GROUP . ARCADE GROUP . </h2>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script>
  
var swiper = new Swiper('.mob-swiper-container', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1, // Display exactly 3 slides
    spaceBetween: 50,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>

<script>
  function openTab(tabId) {
  // Hide all tab contents
  var tabContents = document.getElementsByClassName('tab-content');
  for (var i = 0; i < tabContents.length; i++) {
    tabContents[i].classList.remove('active');
  }

  // Show the selected tab content
  document.getElementById(tabId).classList.add('active');
}






var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3, // Display exactly 3 slides
    spaceBetween: 50,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});





</script>

<script>
 document.addEventListener('DOMContentLoaded', function() {
  const images = document.querySelectorAll('.image');
  const tabs = document.querySelectorAll('.tab');

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', function() {
      showContent(index);
    });
  });

  function showContent(index) {
    images.forEach((image, i) => {
      image.style.display = i === index ? 'block' : 'none';
    });
  }
});
</script>

<script>





document.addEventListener('DOMContentLoaded', function () {
        var menuIcon = document.querySelector('.nv-menuicon');
        var responsiveMenu = document.querySelector('.responsive-menu');
        var closeButton = document.querySelector('.close-button');

        menuIcon.addEventListener('click', function () {
            toggleMenu();
        });

        closeButton.addEventListener('click', function () {
            closeMenu();
        });

        // Function to toggle the menu
        function toggleMenu() {
            if (responsiveMenu.style.display === 'flex') {
                responsiveMenu.style.display = 'none';
            } else {
                responsiveMenu.style.display = 'flex';
            }

            var body_fix = document.getElementById('main-body');
            body_fix.classList.toggle('menu-open');
        }

        // Function to close the menu
        function closeMenu() {
            responsiveMenu.style.display = 'none';
        }

        // Add click event listener to the entire document
        document.addEventListener('click', function (event) {
            // Check if the clicked element is a link inside the responsive menu
            // if (event.target.closest('.responsive-menu a')) {
                if (event.target === closeButton || event.target.closest('.responsive-menu a')) {
                closeMenu(); // Close the menu when a link is clicked
            }
        });
    });

    
</script>
</body>
</html>