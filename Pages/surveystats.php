<?php
include("connect.php");
include("functions.php");
#sadece üye girişi ile açılan sayfa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="initial-scale=0.35 width=device-width">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/SRd5CYF/pngegg.png" alt="pngegg">
                </a>
                <a href="">Earthquake Precautions</a>
            </div>
            <ul>
                <li>
                    <a href="file.php"> DOWNLOAD DATA</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/survey.php"> Survey </a>
                    <a href="https://web.itu.edu.tr/adiguzel18/surveystats.php" class="active">Survey Stats</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/welcome.php" >Home</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/about2.php">About Us</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/profile.php">Profile</a>
                    <a href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
        <div class="survey-form">
        <h2> Survey Stats </h2>
            <table border="2">
             <?php include ("surveystatsphp.php");?>
            </table>
        </div>
    </div>
    
</body>
</html>