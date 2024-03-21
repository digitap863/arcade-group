<?php
include "conn.php"; 
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style.css">
		<script src="js/purify.min.js"></script>
    </head>
    <body>

    <?php include 'nav.php'; ?>
  <div class="container-1">
		<div class="table-widget">
			<span class="caption-container">
				<span class="table-title">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M11.6775 1.3486C10.9695 2.1636 10.6875 7.2886 11.5105 8.1126C12.3335 8.9346 17.2785 8.5186 18.4665 7.5836C21.3245 5.3326 13.9375 -1.2534 11.6775 1.3486Z" stroke="#272727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M16.1372 11.79C17.2212 12.874 14.3472 19.054 8.65122 19.054C4.39722 19.054 0.949219 15.606 0.949219 11.353C0.949219 6.053 6.17822 2.663 7.67722 4.162C8.54022 5.025 7.56822 9.086 9.11622 10.635C10.6642 12.184 15.0532 10.706 16.1372 11.79Z" stroke="#272727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					Project Images (Scroll Through The Table)
          <a href="index.php"><button class="btn back-btn">Back To Add Image</button></a>
				</span>
				<span class="table-row-count">

				</span>
			</span>
			<div class="table-wrapper">
				
			<h1 style="color:#272727">Project Images</h1>
			<p id="tableRowCount"></p>
			<div class="table-wrapper">
				<table>
					<thead>
					<tr>
						<th class="sticky-left">Sl No</th>
						<th>Image</th>
						<th>Category</th>
						
						<th class="sticky-right">Action</th>
					</tr>
					</thead>


					<tbody id="table-rows">
            
          <?php
    include "conn.php";
    $sql = "SELECT * FROM projects ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    $number=1;

    if($result) {
      while($row=mysqli_fetch_assoc($result)) {
          $id=$row['id'];
          $image_url=$row['image_url'];
          $category=$row['project_name'];

					echo '<tr>
					<td>'.$number.'</td>
					<td class="stock sticky-left">
						<div class="stock-wrapper">
						<a href="upload/gallery_uploads/'.$image_url.'" onclick="preventImageNavigation(event);">
            <img src="upload/gallery_uploads/'.$image_url.'" alt="plc">
            </a>
						</div>
					</td>
					
					<td class="price up">
					<div class="stock-info">
							<span class="stock-info__ticker">'.$category.'</span>
					</div>
					</td>


					<td class="sticky-right">
						<button onClick="confirm_del('.$id.')">Delete</button>
					</td>
					
                </tr>';
                $number++;
      } 
    }
     ?>    
					</tbody>          
          
				</table>
			</div>

			</div>
		</div>
  </div>

    <script>
      function confirm_del(id){
        if (confirm("Are you sure you want to delete this item?")) {
          window.location.href="upload/delete-gallery.php?rem="+id;
        }
      }
      
    </script>


<script src="main.js"></script>
<script>
            
            const expand_btn = document.querySelector(".expand-btn");
            
            let activeIndex;
            
            expand_btn.addEventListener("click", () => {
              const iconImage = expand_btn.querySelector('img');
            
              document.body.classList.toggle("collapsed");
            });
            
            const current = window.location.href;
            
            const allLinks = document.querySelectorAll(".sidebar-links a")
            
            allLinks.forEach((elem) => {
              elem.addEventListener('click', function() {
                const hrefLinkClick = elem.href;    
            
                allLinks.forEach((link) => {
                  if (link.href == hrefLinkClick){
                    link.classList.add("active");
                  } else {
                    link.classList.remove('active');
                  }
                });
              })
            });
            
</script>
            
<script>
            // JavaScript
              document.addEventListener("DOMContentLoaded", function () {
                const hasSubmenuItems = document.querySelectorAll(".has-submenu");
            
                hasSubmenuItems.forEach((item) => {
                  const submenu = item.querySelector(".submenu");
            
                  // Initially hide submenu
                  submenu.style.display = "none";
            
                  item.addEventListener("click", function () {
                    // Toggle the class to show/hide submenu
                    this.classList.toggle("active");
            
                    // Toggle the display of the submenu
                    if (submenu.style.display === "none") {
                      submenu.style.display = "block";
                    } else {
                      submenu.style.display = "none";
                    }
                  });
                });
              });
</script>

    </body>
</html>


<?php 
} else {
    header("location: login.php");
} 
?> 
