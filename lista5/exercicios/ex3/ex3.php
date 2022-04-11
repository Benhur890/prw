<?php
$login = $_GET['login'];
$senha = $_GET['senha'];

$usuario= array(
    "Pedro"=>"123",
    "Joao"=>"abc",
    "Maria"=>"senhafraca"
);

if(array_key_exists($login,$usuario)){
    if($usuario[$login]==$senha){
        echo "Acesso permitido";
    }
    else{
        echo "Senha incorreta";
    }
    
}
else{
    echo "Usuário não cadastrado";
}

?>