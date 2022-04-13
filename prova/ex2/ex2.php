<?php
$num1 = "3";
$num2 = "5";
$cont = "0";
$multi = "0";
while($cont<$num2){
    $cont++;
    $multi= $num1 + $multi;
}
echo $num1."x".$num2." = ". $multi;
?>