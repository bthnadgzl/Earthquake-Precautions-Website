<?php
#User login control
#Sadece üye girişi ile açılması gereken sayfalar için.
if(!isset($_COOKIE["email"])){
    Header("Location: https://web.itu.edu.tr/adiguzel18/Signin.html");
    exit();
}
?>