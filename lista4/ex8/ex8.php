<?php
$cont=0;
while($cont<=10){
    echo $cont." x ". $_GET['tabuada']. "= ". $cont*$_GET['tabuada']. "<br>"; 
    $cont++;  
}

?>