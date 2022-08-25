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
    <meta name="viewport" content="initial-scale=0.4 width=device-width">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/SRd5CYF/pngegg.png" alt="pngegg" border="0">
                </a>
                <a href="">Earthquake Precautions</a>
            </div>
            <ul>
                <li>
                    <a href="https://web.itu.edu.tr/adiguzel18/survey.php" class="active"> Survey </a>
                    <a href="https://web.itu.edu.tr/adiguzel18/surveystats.php">Survey Stats</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/welcome.php" >Home</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/about2.php">About Us</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/profile.php">Profile</a>
                    <a href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
        <div class="survey-form">
        <h2>EarthQuake Survey</h2>
             <table>
                <thead></thead>
                <tbody>
                    <form action="surveyphp.php" method="post">
                    <tr>
                        <th>How many members in your family?</th>
                        <td><input type="number" name="memfam" id="memfam" placeholder="Ex. '3'" required></td>
                    </tr>
                    <tr>
                        <th>Do you have earthquake bag in your home?</th>
                        <td><select name="eqbag" id="eqbag">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Do you know earthquake precautions?</th>
                        <td><select name="eqduring" id="eqduring">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Would you participate if a training was given on this subject?</th>
                        <td><select name="eqcourse" id="eqcourse">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan = "2"> 
                            <input type="submit" value="Submit" class="sgnbtn">
                        </td>
                    </tr>
                    </form>
                </tbody>
             </table>
        </div>
    </div>
    
</body>
</html>