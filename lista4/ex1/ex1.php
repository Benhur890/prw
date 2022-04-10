<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$escolha = $_GET["escolha"];
    if($escolha=="somar"){
        echo $num1+$num2;
    }
    if($escolha=="subtrair"){
        echo $num1-$num2;
    }
    if($escolha=="dividir"){
        echo $num1/$num2;
    }
    if($escolha=="multiplicar"){
            echo $num1*$num2;
    }
?>