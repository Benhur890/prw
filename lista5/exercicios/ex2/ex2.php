<?php
$nome = strtolower($_GET['produto']);

$vetor = array("mouse","teclado","monitor","impressora","fone","cabo");
$vetor["mouse"]="R$20";
$vetor["teclado"]="R$30";
$vetor["monitor"]="R$200";
$vetor["impressora"]="R$400";
$vetor["fone"]="R$70";
$vetor["cabo"]="R$25";

$indice = array_search($nome, $vetor);
if($indice === false){
    echo "Elemento não encontrado";
}
else{
    echo "Elemento encontrado na posição $indice do vetor<br>";
    echo "O produto: ";
   print_r($nome);
   echo " custa: ";
    if(($vetor[$nome])==$_GET['preco']){
        print_r($vetor[$nome]);
    }
    else{
        echo "preço inserido errado!!";
    }
   
}


?>