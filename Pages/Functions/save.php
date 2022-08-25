<?php
	$con=mysqli_connect("mysql.itu.edu.tr","db64175","i8nVZCfYN6","db64175");
	if (!$con) {
		echo "baglanti koptu.";
		die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
	  }	
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"];
	$query = "INSERT INTO user (name , surname , email , password , city) VALUES ('$name','$surname','$email','$password','$city')";
	$rs = mysqli_query($con, $query);
	if($rs){
		Header('Location: https://web.itu.edu.tr/adiguzel18/Signin.html');
		die;
	}
	else{
		Header('Location: https://web.itu.edu.tr/adiguzel18/Signup.php');
		die;
	}
?>