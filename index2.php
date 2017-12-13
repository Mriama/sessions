<?php
session_start();
?>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
echo ("Nous sommes le $date et il est $heure \n").'<br>'.'<br>'.'<br>';



$nombre1 = 5;
$nombre2 = 3;
$addition = $nombre1 + $nombre2;
$soustraction = $nombre1 - $nombre2;
$multiplication = $nombre1 * $nombre2;
$division = $nombre1 / $nombre2;
$modulo = $nombre1 % $nombre2;

echo $nombre1.'+'.$nombre2."=". $addition.'<br/>';
echo $nombre1.'-'.$nombre2."=".$soustraction.'<br/>';
echo $nombre1.'*'.$nombre2."=".$multiplication.'<br/>';
echo $nombre1.'/'.$nombre2."=".$division.'<br/>';
echo $nombre1.'%'.$nombre2."=".$modulo.'<br/>';




?>

