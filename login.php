<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: details.php");
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
            color:rgb(240, 108, 0);
        }
        .container{
        max-width: 600px;
        margin:0 auto;
        padding:50px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        marquee{
                    color: white;
                }
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .login-container {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 20px;
            border:1px solid rgba(255, 255, 255, 0.18);
            padding: 20px;
            width: 500px;
            text-align: center;
        }
        .login-container h2 {
            color:rgb(240, 108, 0);
        }

        .login-form {
            display: flexbox;
            flex-direction: column;
            margin-top: 20px;
        }

        .login-form label {
            margin-bottom: 8px;
        }

        .login-form input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .signup-link {
            margin-top: 16px;
            color:rgb(240, 108, 0);
        }
        .signup-link a {
            color: #ff9861;
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

   <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    $_SESSION["email"]=$user["email"];
                    header("Location:details.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>

        <div class="center-container">
        <div class="login-container">
            <center><b><h2>Log In</h2></b></center>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    </div>
    </div>
</body>
</html>