<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>User Dashboard</title>
    <style>
    .glass{
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(4px);
    }

    body {
    font-family: Arial;
    padding: 10px;
    margin: 0;
    padding: 0;
    background-image: url('src/BG.jpg');
    background-size: cover; 
    background-position: center; 
    font-family: 'MyFont', Arial, sans-serif;
    color:rgb(240, 108, 0);
    }
    marquee{
    color: white;
    }   
    a{
    padding: 30px;
    color: rgb(147, 147, 147);
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
    .container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    display: block;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
    width: 500px;
    text-align: center;
    }
    .glass{
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        height: 40vh   ;
        padding: 10px;
        border:1px solid rgba(255, 255, 255, 0.18);
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
    <div class="glass">
        <h1>Welcome to Dashboard</h1>
        <br><hr>
        <p> You're Email : <?php echo htmlspecialchars($email); ?></p>
        Your can Log out using Logout Button at bottom and you can verify your mail here ,
        enjoy your time and feel free to give your most valueble feedback in feedback.
        thank You .<br><br>
        <center><a href="logout.php" class="btn btn-warning">Logout</a></center>
    </div>
    </div>
</body>
</html>