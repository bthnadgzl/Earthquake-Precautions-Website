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
    <title>Earthquake precautions</title>
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
                    <a href="https://web.itu.edu.tr/adiguzel18/welcome.php" >Home</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/about2.php">About Us</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/profile.php" class="active">Profile</a>
                    <a href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
        <div class="center">
            <h1>
            <?php   
                    $email = $_COOKIE['email'];
                    $query = "SELECT * FROM user WHERE email ='$email'";
                    $rs = mysqli_query($con, $query);
                    if($rs){    
                        if($rs && mysqli_num_rows($rs) > 0){
                            $user_data = mysqli_fetch_assoc($rs);
                            $id = $user_data['id'];
                            $city = $user_data['city'];
                            $name = $user_data['name'];
                            $surname = $user_data['surname'];
                            $email = $user_data['email'];
                            $password = $user_data['password'];
                            echo "<div class=''>
                                    <table >
                                     <thead></thead>
                                    <caption>Profile</caption>
                                    <tbody>
                                       <tr>
                                       <th>Id: </th>
                                      <td>$id</td>
                                      </tr>
                                      <tr>
                                       <th>Name: </th>
                                     <td>$name</td>
                                    </tr>
                                    <tr>
                                       <th>Surname: </th>
                                       <td>$surname</td>
                                   </tr>
                                   <tr>
                                       <th>City: </th>
                                       <td>$city</td>
                                   </tr>
                                   <tr>
                                        <th>Password: </th>
                                       <td>$password</td>
                                   </tr>
                               </tbody>
                            </table>
                            </div>";
                        }
                        else{
                            Header("Location: https://web.itu.edu.tr/adiguzel18/survey.php");
                        }
                    }    

            ?></h1>
            
        </div>
    </div>
    
</body>
</html>