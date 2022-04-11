<?php
$login = $_GET['login'];
$senha = $_GET['senha'];



$usuario["Pedro"]["123"]="1" ;
$usuario["Maria"]["abc"]="2" ;
$usuario["Rogerio"]["ab3"]="3" ;

if(array_key_exists($login, $usuario)){
    
        
        if($usuario[$login][$senha]==false){
            echo "senha incorreta";
        }
        else{
            echo "Usuário da posição:".$usuario[$login][$senha]."<br>";
        }
    
    
}
else{
    echo "Usuário não encontrado";
}




?>