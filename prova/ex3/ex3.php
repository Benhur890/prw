<?php
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$IMC= $peso/($altura*$altura);

if($IMC<=17){
    echo "Muito abaixo do peso!";
}
elseif($IMC>17 && $IMC <=18.49){
    echo "Abaixo do peso!";
}
elseif($IMC>18.5 && $IMC <=24.99){
    echo "Peso normal!";
}
elseif($IMC>25 && $IMC <=29.99){
    echo "Acima do peso!";
}
elseif($IMC>30 && $IMC <=34.99){
    echo "Obesidade I!";
}
elseif($IMC>35 && $IMC <=39.99){
    echo "Obesidade II (severa)!";
}
elseif($IMC>=40){
    echo "Obesidade III(mórbida)!";
}


?>