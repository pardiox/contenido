<?php
/*
$password = "1234212uekajdklasjdlkjp1i2opipo1ido21idpo21idop21idpo21idpo21ido21di21opido12idop21idop2i1dop1i2dopid1poid2oi";
$hash = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);
 if(password_verify($password, $hash)){
     echo "hola <br>" . $hash . "<br>" . $password;   
 }*/

$pepper = "adsadasdssss";
$pwd = "123";
$pwd_peppered = hash_hmac("sha256", $pwd, $pepper);
echo $pwd . "<br>" . $pwd_peppered; 


?>