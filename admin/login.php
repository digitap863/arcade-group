<?php
session_start();
include ("conn.php");


if (isset($_POST["submit"])) {
  
 $uname = $_POST["loginusername"];
 $pswd = $_POST["loginpassword"];
 
 $sql = "select * from admin_login where username= '".$uname."' and password= '".$pswd."' ";
 $result = $conn->query($sql);
 
  if($result->num_rows > 0){
      $_SESSION['username'] = $uname;
      header("location:index.php");
      die;
  }
  else {
    echo '<script>alert("Incorrect Password or Username");</script>';
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN ARCADE</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    
    <style>
        
    body {
      font-family: 'Urbanist', sans-serif;
      background-color: #222 !important;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      width: 400px;
      margin: 0 auto;
      padding: 30px;
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      color: #fff;
    }

    h1 {
      text-align: center;
      /*margin-bottom: 30px;*/
      /*font-size: 36px;*/
      color: #b38bff;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
      font-size: 18px;
    }

    input {
      padding: 12px;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #fff;
      background-color: #555;
    }

    /*button {*/
    /*  padding: 10px;*/
    /*  background-color: #b38bff;*/
    /*  color: #fff;*/
    /*  border: none;*/
    /*  border-radius: 5px;*/
    /*  cursor: pointer;*/
    /*  font-size: 18px;*/
    /*  transition: background-color 0.2s ease-in-out;*/
    /*}*/

    /*button:hover {*/
    /*  background-color: #8c5fb2;*/
    /*}*/

button {
  --primary-color:#111;
  --secondary-color: #fff;
  --hover-color: #555;
  --arrow-width: 10px;
  --arrow-stroke: 2px;
  box-sizing: border-box;
  border: 0;
  border-radius: 2px;
  color: var(--secondary-color);
  padding: 1em 1.8em;
  background: var(--primary-color);
  display: flex;
  transition: 0.2s background;
  align-items: center;
  gap: 0.6em;
  font-weight: bold;
  width:8rem;
  margin:auto;
  justify-content:center;
  font-size:14.2px;
}

button .arrow-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

button .arrow {
  margin-top: 1px;
  width: var(--arrow-width);
  background: var(--primary-color);
  height: var(--arrow-stroke);
  position: relative;
  transition: 0.2s;
}

button .arrow::before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  border: solid var(--secondary-color);
  border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
  display: inline-block;
  top: -3px;
  right: 3px;
  transition: 0.2s;
  padding: 3px;
  transform: rotate(-45deg);
}

button:hover {
  background-color: var(--hover-color);
}

button:hover .arrow {
  background: var(--secondary-color);
}

button:hover .arrow:before {
  right: 0;
}

    a {
      text-decoration: none;
      color: #b38bff;
      font-size: 18px;
      transition: color 0.2s ease-in-out;
    }

    a:hover {
      color: #8c5fb2;
    }

    p {
      text-align: center;
      margin: 8px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
          <h1>Arcade Group</h1>
          <form method="post" action="#">
            <label for="username">Username</label>
            <input type="text" id="username" name="loginusername" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="loginpassword" required>
            <!--<button type="submit">Login</button>-->
            <button type="submit" name="submit">Login
            <div class="arrow-wrapper">
                <div class="arrow"></div>
            </div>
            </button>
          </form>
          
        </div>
    
      </div>


      <script>
        const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');
const loginLink = document.getElementById('login-link');
const signupLink = document.getElementById('signup-link');

loginLink.addEventListener('click', (event) => {
  event.preventDefault();
  signupForm.style.display = 'none';
  loginForm.style.display = 'block';

  setTimeout(() => {
    signupForm.style.opacity = 0;
    loginForm.style.opacity = 1;
  }, 10);
});

signupLink.addEventListener('click', (event) => {
  event.preventDefault();
  loginForm.style.display = 'none';
  signupForm.style.display = 'block';

  setTimeout(() => {
    loginForm.style.opacity = 0;
    signupForm.style.opacity = 1;
  }, 10);
});
      </script>
</body>
</html>