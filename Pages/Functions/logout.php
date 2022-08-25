<?php
#Kullanıcıya çıkış yaptırır.
setcookie("email",$_COOKIE["email"],time()-1);
setcookie("city",$_COOKIE["city"],time()-1);
setcookie("id",$_COOKIE["id"],time()-1);
setcookie("name",$_COOKIE["name"],time()-1);


Header("Location: https://web.itu.edu.tr/adiguzel18/web.html");
?>