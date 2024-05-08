<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: details.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
                body {
            font-family: Arial, sans-serif;
            display: block;
            align-items: center;
            justify-content: center;
            font-family: Arial;
            padding: 10px;
            font-family: 'MyFont', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('src/BG.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            color:rgb(240, 108, 0);
        }
        marquee{
                    color: white;
                }
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 20px;
            border:1px solid rgba(255, 255, 255, 0.18);
            padding: 20px;
            width:  500px;
            text-align: center;
        }

        .signup-container h2 {
            color:rgb(240, 108, 0);
        }

        .signup-form {
            display: flexbox;
            flex-direction: column;
            margin-top: 20px;
        }

        .signup-form label {
            margin-bottom: 8px;
        }

        .signup-form input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .signup-form button {
            background-color: #006fde;
            color: #fff;
            padding: 10px;
            border: firebrick;
            border-radius: 4px;
            cursor: pointer;
        }

        .signup-form button:hover {
            background-color: #006fde;
        }

        .login-link {
            margin-top: 16px;
            color:rgb(240, 108, 0);
        }

        .signup-link a {
            color: #ffb163;
            text-decoration: none;
            font-weight: bold;
        }
        .topnav {
                overflow: hidden;
                background-color: #262626;
                border-radius: 15px; 
        }
        .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
        }

        .topnav a:hover {
                background-color: #ddd;
                color: black;
        }
        @font-face {
                font-family: 'MyFont';
                src: url('src/CHOSENCE\ BOLD.OTF') format('truetype'); 
                }
        .form-group{
                margin-bottom:30px;
        }
    </style>
</head>
<body>
<div class="topnav">
        <a href="index.php"><i class="fas fa-home">   </i>   Home</a>      
    <a href="about.html"><i class="fas fa-road"> </i> About Us</a>  
    <img src="src/Logo.png" style="text-align: center;" width="50" height="50">     
    <a href="registration.php" style="float:right"><i class="fas fa-user"> </i>  Sign in</a>       
            <a href="login.php" style="float:right"><i class="fas fa-download"> </i>  Login </a>
    <a href="FB.html" style="float:left"><i class="fas fa-users"> </i>  FeedBack </a>
        <marquee direction="right" behavior="scroll">
            <img src="src/Logo.png" width="15" height="15">
            Your Problem is our problem ⭕
            Shocking and Breaking News: Pineapple v12 has been leaked !!
            <img src="src/Logo.png" width="15" height="15">
        </marquee>
      </div>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
              <div class="center-container">
    <div class="signup-container">
        <h2>signup</h2>

        <form action="registration.php" method="post" class="signup-form" class="was-validated">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" value="Register" name="submit" class="btn btn-primary">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
    </div>
    </div>
</body>
</html>