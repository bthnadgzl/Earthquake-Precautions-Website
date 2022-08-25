<?php
include("connect.php");
include("functions.php");
$query = "SELECT * FROM survey ORDER BY userid asc";
$rs = mysqli_query($con,$query);
$file = "datas.txt";
$fh = fopen($file, 'w') or die("can't open file");
while($user_data = mysqli_fetch_assoc($rs)){
    $id = $user_data['id'];
    #$userid = $user_data['userid'];
    $fammem = $user_data['fammem'];
    $eqbag = $user_data['eqbag'];
    $eqduring = $user_data['eqduring'];
    $eqcourse = $user_data['eqcourse'];
    $city = $user_data['city'];
    $data = ("Id : $id , User_Id : $userid(Bu veriyi çekmeye çalıştığımda indirme butonu tamamen işlevini yitiriyor sebebini aradım ancak bulamadım.) , Family Members : $fammem , Earthquake Bag : $eqbag , Knowledge during eq : $eqduring , Earthquake Course : $eqcourse , City : $city \n \n");
    fwrite($fh,$data);
}
fclose($fh);
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);











?>
