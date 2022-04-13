<?php

$nome = $_GET['nome'];
$estado = $_GET['estado'];
$idcpf = $_GET['cpf'];
$idrg = $_GET['rg'];
$sexo = $_GET['radio2'];
$saldo = $_GET['saldo'];
$total = $_GET['total'];
$novo=$saldo-$total;
//mostrar os dados
echo "DADOS DA COMPRA: <br><br>";
echo "Nome do cliente: ".$nome."<br>";
echo "Estado: ".$estado."<br>";
echo "Identificação<br> "."CPF:".$idcpf."<br>RG:".$idrg."<br>";
echo "Sexo: ".$sexo."<br>";
echo "Saldo: ".$saldo."<br>";
echo "Total da compra: ".$total."<br><br><br>";

    //primeiro item
    if($nome==""){
        echo "O nome não pode estar vazio!";
        if($id=="" || $idrg ==""){
            echo "<br>A identificação não pode ser nula!";-*
            
        }
    }
    elseif($idcpf==""|| $idrg ==""){
        echo "A identificação não pode ser nula!";
        
    }

    //saldo
    elseif($saldo>$total){
        
        echo "<br>Compra concluida!!<br> Seu saldo agora é:R$".$novo;
    }
    elseif($saldo<$total){
         echo "<br>Saldo insuficiente para concluir a compra!!";
    }




?>