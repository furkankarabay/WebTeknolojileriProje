  
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$usercontrol ="G181210105@ogr.sakarya.edu.tr";
$passcontrol ="admin";

if($username and $password){
 
} else {
header("location:login.html");
}
if($usercontrol == $username and $passcontrol == $password){
    echo "Hoşgeldiniz ";
    echo $usercontrol;
	echo "  Yönlendiriliyorsunuz.";
    header("Refresh: 2 url=index.html");
}
else{ 

    echo "Hatalı kullanıcı veya şifre. ";
	echo "  Yönlendiriliyorsunuz.";
    header("Refresh: 2; url=login.html");
}
?>