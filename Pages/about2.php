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
    <title>About Us</title>
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="initial-scale=0.4 width=device-width">
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
                    <a href="https://web.itu.edu.tr/adiguzel18/survey.php">Survey</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/surveystats.php">Survey Stats</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/welcome.php">Home</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/about2.php" class="active">About Us</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/profile.php">Profile</a>
                    <a href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
        <div class="center">
        <h2>Student Information</h2>
            <table>
                <thead></thead>
               <tbody>
                  <tr>
                  <th>Number:  </th>
                 <td>090180354</td>
                 </tr>
                 <tr>
                  <th>Name: </th>
                <td>Batuhan</td>
               </tr>
               <tr>
                  <th>Surname: </th>
                  <td>Adıgüzel</td>
              </tr>
              <tr>
                  <th>Subject:  </th>
                  <td>Earthquake Precautions</td>
              </tr>
              <tr>
                   <th>Course: </th>
                  <td>MAT 337E</td>
              </tr>
          </tbody>
       </table>

       </div>
    </div>
    
</body>
</html>