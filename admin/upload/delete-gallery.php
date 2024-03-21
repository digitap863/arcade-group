<?php

include '../conn.php';

function image_remove($img) {
    $upload_directory = './gallery_uploads/'; // Replace with your upload directory path

    if(file_exists($upload_directory . $img)) {
        if(!unlink($upload_directory . $img)) {
            echo "Error: File could not be deleted.";
        }
    } else {
        echo "Error: File does not exist.";
    }
}

// if(isset($_GET['rem'])) {
//     $did=$_GET['rem'];

//     $sql="DELETE FROM gallery WHERE id=$did";
//     $result=mysqli_query($conn,$sql);

//     if($result) {
//         header("location: ../gallery-list.php");
//     } else {
//         die(mysqli_error($conn));
//     }
// }


if(isset($_GET['rem'])) {
    $did = $_GET['rem'];

    $sql_select_image = "SELECT image_url FROM projects WHERE id=$did";
    $result_select_image = mysqli_query($conn, $sql_select_image);

    if($result_select_image) {
        $row = mysqli_fetch_assoc($result_select_image);
        $image_filename = $row['image_url'];

        $sql = "DELETE FROM projects WHERE id=$did";
        $result = mysqli_query($conn, $sql);

        if($result) {
            image_remove($image_filename);
            echo '<script>alert("Item deleted successfully");</script>';
            echo '<script>window.location.href="../gallery.php";</script>';
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}