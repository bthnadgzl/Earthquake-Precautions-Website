
<?php
	$con=mysqli_connect("mysql.itu.edu.tr","db64175","i8nVZCfYN6","db64175");
	if (!$con) {
		echo "baglanti koptu.";
		die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
	  }	


	$query = "SELECT * from survey";
    $query2 = "SELECT sum(fammem) as 'fammem'from survey";
    $query3 = "SELECT count(eqbag) as 'eqbagy' from survey WHERE eqbag = 'Yes'";
    $query4 = "SELECT count(eqbag) as 'eqbagn' from survey WHERE eqbag = 'No'";
    $query5 = "SELECT count(eqduring) as'eqduringy' from survey WHERE eqduring = 'Yes'";
    $query6 = "SELECT count(eqduring) as'eqduringn' from survey WHERE eqduring = 'No'";
    $query7 = "SELECT count(eqcourse) as 'eqcoursey'from survey WHERE eqcourse = 'Yes'";
    $query8 = "SELECT count(eqcourse) as 'eqcoursen'from survey WHERE eqcourse = 'No'";
	$rs  = mysqli_query($con, $query);
    $rs2 = mysqli_query($con, $query2);
    $rs3 = mysqli_query($con, $query3);
    $rs4 = mysqli_query($con, $query4);
    $rs5 = mysqli_query($con, $query5);
    $rs6 = mysqli_query($con, $query6);
    $rs7 = mysqli_query($con, $query7);
    $rs8 = mysqli_query($con, $query8);

    if($rs){
        if($rs && mysqli_num_rows($rs) > 0){
            $user_data = mysqli_fetch_assoc($rs);
            $user_data2 = mysqli_fetch_assoc($rs2);
            $user_data3 = mysqli_fetch_assoc($rs3);
            $user_data4 = mysqli_fetch_assoc($rs4);
            $user_data5 = mysqli_fetch_assoc($rs5);
            $user_data6 = mysqli_fetch_assoc($rs6);
            $user_data7 = mysqli_fetch_assoc($rs7);
            $user_data8 = mysqli_fetch_assoc($rs8);
            $fammem = $user_data2['fammem'];
            $eqbagy = $user_data3['eqbagy'];
            $eqbagn = $user_data4['eqbagn'];
            $eqduringy = $user_data5['eqduringy'];
            $eqduringn = $user_data6['eqduringn'];
            $eqcoursey = $user_data7['eqcoursey'];
            $eqcoursen = $user_data8['eqcoursen'];
            echo "<tr><th>Questions</th><th colspan = '2'> Answer</th>";
            echo "<tr><th>How many member in your family</th><th colspan='2'>$fammem</th></tr>";
            echo "<tr><th>Questions</th><th>Yes</th><th>No</th></tr>";
            echo "<tr><th>Do you have earthquake bag in your home?</th><th>$eqbagy</th><th>$eqbagn</th></tr>";
            echo "<tr><th>Do you know earthquake precautions?</th><th>$eqduringy</th><th>$eqduringn</th></tr>";
            echo "<tr><th>Would you participate if a training was given on this subject?</th><th>$eqcoursey</th><th>$eqcoursen</th></tr>";
        }
        
    }
    else{
        echo "Error Occured.";
    }
