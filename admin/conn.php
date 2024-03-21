<?php  

$sname = "localhost";
$uname = "u772758649_arcade";
$password = "Arcade@db01";

$db_name = "u772758649_arcadedb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
