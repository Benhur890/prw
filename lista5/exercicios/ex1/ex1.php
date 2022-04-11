<?php
$nome = strtolower($_GET['produto']);

$vetor = array("mouse","teclado","monitor","impressora","fone","cabo");
$indice = array_search($nome, $vetor);
if($indice === false){
    echo "Elemento não encontrado";
}
else{
    echo "Elemento encontrado na posição $indice do vetor";
}


?>