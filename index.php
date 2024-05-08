<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$email = isset($_SESSION["email"]) ? $_SESSION["email"] : 'Unknown';  // Get the stored email
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homie Solutions©️ : Where Problems Find Their Path!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
               body {
                font-family: Arial;
                padding: 10px;
                margin: 0;
                padding: 0;
                background-image: url('src/BG.jpg');
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;
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
                @font-face {
                font-family: 'MyFont';
                src: url('src/CHOSENCE\ BOLD.OTF') format('truetype'); 
                }
                    .tr2 {
                font-family: Arial;
                padding: 10px;
                background: #303030;
                font-family: 'MyFont', Arial, sans-serif;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
                backdrop-filter: blur(6px);
                -webkit-backdrop-filter: blur(4px);
                border-radius: 20px;
                border:1px solid rgba(255, 255, 255, 0.18);
                
                    }
                tr {
                font-family: Arial;
                padding: 10px;
                background: #414141;
                font-family: 'MyFont', Arial, sans-serif;
                    }
                    .tab1 {
                border-collapse: collapse;
                width: 1400px; 
                border: 3px solid #000; 
                border-radius: 15px; 
                overflow: hidden;
                font-family: 'MyFont', Arial, sans-serif;
                
                          }
                    th, td {
                padding: 10px;
                text-align: center;
                border-radius: 12px;
                border: 1px #000;
                border-bottom: 1px solid #ddd;   
                font-family: 'MyFont', Arial, sans-serif;

                           }
                    .tr2:hover, .tr2:hover {
                background-color: rgba(0, 0, 0, 0.443); 
                box-shadow: 0 0 500px rgb(0, 0, 0);
                box-shadow: inset 0 0 7px 5px rgb(255, 255, 255); 
                font-family: 'MyFont', Arial, sans-serif;
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
                    .glass{
                        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
                        backdrop-filter: blur(6px);
                        -webkit-backdrop-filter: blur(4px);
                        border-radius: 10px;
                        height: 70px;
                        padding: 10px;
                        border:1px solid rgba(255, 255, 255, 0.18);
                        }
                        .glow-button {
                            position: relative;
                            padding: 10px 20px;
                            font-size: 16px;
                            border: none;
                            background-color: #333;
                            color: white;
                            overflow: hidden;
                            cursor: pointer;
                                    }

                        .glow-button::before, .glow-button::after {
                            content: '';
                            position: absolute;
                            width: 50px;
                            height: 50px;
                            background: radial-gradient(circle, #fff, transparent);
                            opacity: 0;
                            transition: opacity 0.3s ease-in-out;
                                        }

                        .glow-button::before {
                            top: -25px;
                            left: -25px;
                                        }

                        .glow-button::after {
                            bottom: -25px;
                            right: -25px;
                                        }

                        .glow-button:hover::before, .glow-button:hover::after {
                            opacity: 1;
                                        }
                        .user{
                            align-items:center;
                            height: 20px;
                            width: 400px;
                            padding: 10px;
                            text-align: center;
                        }
    </style>
</head>
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
    <center>
        <img src="src/Logo.png" width="100">
        <br>
        <h1>Homie Tutorial©️ : Where Problems Find Their Path!!</h1>
        <p>Welcome to Homie Tutorial, where curiosity meets competence. Our digital haven is designed for learners of all stripes—whether you’re a coding enthusiast, a budding artist, or a culinary explorer.</p>
    </center>
    <hr>
    <div class="glass" class="user" style="float:right;">
    <right> <b><i>Welcome , </i></b>
    <p> You're Login With the Email : <?php echo htmlspecialchars($email); ?></p>
    </right>
    </div>
    
      <div class="container-fluid">
    <table width="100%" cellpadding="35" class="tab1">
        <tr background="src/UIc2.jpg" class="tr2">
            <h1>Solution Articles</h1>
            <hr>
            <td >
               
                       <a href="blacksc.html"> How to Fix Black Screen Issue in Windows 11/10.</a>
            </td><td align="center" background="src/UIcl2.png">
                        <img src="src/logo-windows-11-icon-1024.png" width="50">
            </td><td >
                <i class="fas fa-user"> </i> By Jeremy Laukkonen • Updated on March 8, 2021 
            </td>
            </tr>
            <tr background="src/UIc2.jpg" class="tr2">
            <td>        
                <a href="wasd.html"> How to Fix WASD swapped to Arrow Keys.</a>
            </td><td align="center"     background="src/UIcl2.png" >
                        <img src="src/logo-windows-11-icon-1024.png" width="50">
            </td><td>                    
                <i class="fas fa-user"> </i>  By Michael Bizzaco and Tyler Lacoma • February 20, 2024
            </td>
            </tr>
            <tr background="src/UIc2.jpg" class="tr2">
            <td>
                <a href="Winex.html"> How to fix Windows Explorer Not Running.</a>
            </td><td align="center" background="src/UIcl2.png">
                        <img src="src/logo-windows-11-icon-1024.png" width="50">
            </td><td>
                <i class="fas fa-user"> </i> By Kamil Anwar • Published on December 12, 2023
            </td>
            </tr>
            <tr background="src/UIc2.jpg" class="tr2">
            <td>
                <a href="DNS.html"> How to Clear DNS cache.</a>
            </td><td align="center" background="src/UIcl2.png">
                        <img src="src/logo-windows-11-icon-1024.png" width="50">
            </td><td>
                <i class="fas fa-user"> </i>  By Jeremy Laukkonen • Updated on November 5, 2021
            </td>
            </tr>
            <tr background="src/UIc2.jpg" class="tr2">
            <td>
                <a href="HHD.html">  How to Boost HDD Performance.</a>    
            </td><td align="center" background="src/UIcl2.png">
                        <img src="src/logo-windows-11-icon-1024.png" width="50">
            </td><td>
                <i class="fas fa-user"> </i>   By Jonna • Updated on January 23, 2024
            </td>
        </tr>
        </table>
    </div>

        <div class="container-fluid">
        <table width="100%" cellpadding="35" >
        <tr class="glass">         
            <td valign="bottom" align="left">
                <h2>About Us</h2>
                <p>
                    <strong>Company Name:</strong> Homie tutorials©️<br>
                    <strong>Location:</strong> Erode, Tamil Nadu (IND).<br>
                    <strong>Founded:</strong> 2023<br>
                    <strong>CEO:</strong> Johnathan Pillai
                </p>
            </td>
            <td  valign="bottom"  align="center" >    
                <h2>Suggestion Form</h2>
                <form>
                    <label for="suggestion_name">Your Name:</label><br>
                    <input type="text" id="suggestion_name" name="suggestion_name" required><br>
                    <label for="suggestion_email">Your Email:</label><br>
                    <input type="email" id="suggestion_email" name="suggestion_email" required><br>
                    <label for="suggestion_text">Your Suggestion:</label><br>
                    <textarea id="suggestion_text" name="suggestion_text" rows="4" required></textarea><br>
                    <input type="submit" value="Submit" class="glow-button">
                </form>
            </td>
            <td valign="bottom"  align="right">    
                <h2>Can't Find Your Solution?</h2>
                <form>
                    <label for="problem_name">Your Name:</label><br>
                    <input type="text" id="problem_name" name="problem_name" required><br>
                    <label for="problem_email">Your Email:</label><br>
                    <input type="email" id="problem_email" name="problem_email" required><br>
                    <label for="problem_description">Describe Your Problem:</label><br>
                    <textarea id="problem_description" name="problem_description" rows="4" required></textarea><br>
                    <input type="submit" value="Submit" class="glow-button">
                </form>
            </td>
        </tr>
    </div>
    </table>
    
    <center>Made with 🤡.Homie tutorials©️</center>
</body>
</html>
