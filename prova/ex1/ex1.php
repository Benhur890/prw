<?php
$salario ="250";

if($salario<="300"){
    $reajuste=($salario*(50/100))+$salario;
    echo "O salário: R$".$salario. " foi reajustado em 50%: R$".$reajuste;
}
else{
    $reajuste=($salario*(30/100))+$salario;
    echo "O salário: R$".$salario. " foi reajustado em 30%: R$ ".$reajuste;
}

?>