
<?php
	$con=mysqli_connect("mysql.itu.edu.tr","db64175","i8nVZCfYN6","db64175");
	if (!$con) {
		echo "baglanti koptu.";
		die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
	  }	

    $email = $_POST["email"];
    $password = $_POST["password"];
	$query = "SELECT * from user where email='$email' limit 1";
	$rs = mysqli_query($con, $query);
    if(mysqli_num_rows($rs) < 1){
        echo "E mail is not exist.";
    }
    if($rs){
        if($rs && mysqli_num_rows($rs) > 0){
            $user_data = mysqli_fetch_assoc($rs);
            $id = $user_data['id'];
            $city = $user_data['city'];
            $name = $user_data['name'];
            if($user_data['password'] === $password){
                setcookie("email",$email);
                setcookie("city",$city);
                setcookie("id",$id);
                setcookie("name",$name);
                Header("Location: https://web.itu.edu.tr/adiguzel18/welcome.php");
                exit();
            }
            else {
                echo "Wrong Password.";
                exit();
            }
        }
        
    }
    else{
        echo "wrong info";
    }
