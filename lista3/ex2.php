

<?php
$palavra= "palavra";
$partes = explode("a", $palavra);
$parte1 = $partes[0];
$parte2 = $partes[1];
$parte3 = $partes[2];
$parte4 = $partes[3];
$novapalavra = $parte1."X".$parte2."X".$parte3.$parte4."X";
echo $palavra. "<br> ". $novapalavra;


?>