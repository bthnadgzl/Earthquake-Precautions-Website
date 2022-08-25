<?php

	$con=mysqli_connect("mysql.itu.edu.tr","db64175","i8nVZCfYN6","db64175");
	if (!$con) {
		echo "baglanti koptu.";
		die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
	  }	
	$id = $_COOKIE["id"];  
    $fammem = $_POST["memfam"];
    $eqbag = $_POST["eqbag"];
    $eqduring = $_POST["eqduring"];
    $eqcourse = $_POST["eqcourse"];
	$city = $_COOKIE["city"];
	$query = "INSERT INTO survey (userid , fammem , eqbag , eqduring , eqcourse, city) VALUES ('$id','$fammem','$eqbag','$eqduring','$eqcourse','$city')";
	$rs = mysqli_query($con, $query);
	if($rs){
		Header('Location: https://web.itu.edu.tr/adiguzel18/surveystats.php');
		die;
	}
	else{
		echo "An error occured.";
		die;
	}
?>