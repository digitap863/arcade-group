<?php
if (isset($_POST['submit'])) {
    include "../conn.php";

    $img_name = $_FILES['img_name']['name'];
    $img_size = $_FILES['img_name']['size'];
    $tmp_name = $_FILES['img_name']['tmp_name'];
    $error = $_FILES['img_name']['error'];
    $prod_category = $_POST['category'];

    if ($error === 0) {
        if ($img_size > 2700000) {
            echo '<script>
            alert("Sorry, your file is too large. Try uploading a file that is under 2.5MB in size");
            window.location.href = "../index.php"; 
            </script>';
        } else {
            // Additional conditions
            if ($img_size > 800000 && $img_size <= 2700000) {
                // Compress the image without resizing
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png", "webp");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = './gallery_uploads/' . $new_img_name;

                    switch ($img_ex_lc) {
                        case 'jpg':
                        case 'jpeg':
                            $source_image = imagecreatefromjpeg($tmp_name);
                            imagejpeg($source_image, $img_upload_path, 75); // Adjust quality as needed
                            break;
                        case 'png':
                            $source_image = imagecreatefrompng($tmp_name);
                            imagepng($source_image, $img_upload_path, 9);
                            break;
                        case 'webp':
                             $source_image = imagecreatefromwebp($tmp_name);
                             imagewebp($source_image, $img_upload_path, 75); // Adjust quality as needed
                            imagedestroy($source_image);
                            break;
                        // Add more cases if handling other image types
                        default:
                            $source_image = false; // Unsupported image type
                            break;
                    }

                    // Database insertion
                    if ($source_image !== false) {
                        $sql = "INSERT INTO projects(image_url, project_name) VALUES ('$new_img_name','$prod_category')";
                        mysqli_query($conn, $sql);

                        $em = "Image uploaded successfully!";
                        header("Location: ../gallery.php?$em");
                    } else {
                        echo '<script>
                        alert("Unsupported image type!");
                        window.location.href = "../index.php"; 
                        </script>';
                    }
                } else {
                    echo '<script>
                    alert("You can\'t upload files of this type!");
                    window.location.href = "../index.php"; 
                    </script>';
                }
            } 
            
            else {
               
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				
                        $img_upload_path = './gallery_uploads/' . $new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				
				$sql = "INSERT INTO projects(image_url, project_name) VALUES('$new_img_name','$prod_category')";
                    mysqli_query($conn, $sql);
						$em = "Image uploaded successfully!";
		        header("Location: ../gallery.php?$em");
                    
			}else {
			
			  echo '<script>
			  alert("You cant upload files of this type!");
			  window.location.href = "../add-gallery.php"; 
			   </script>';
			}               
               
            }
            
            
        }
        
        
    } else {
        echo '<script>
        alert("Unknown error occurred!");
        window.location.href = "../index.php"; 
        </script>';
    }
    
} else {
    echo '<script>
    alert("Error occurred! Upload another file");
    window.location.href = "../index.php"; 
    </script>';
}
?>
