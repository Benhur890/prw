<?php

include("conexao.php");

$nome = $_GET['nome'];
$email = $_GET['email'];
$tel = $_GET['tel'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$celular = $_GET['celular'];




echo "<br>Nome: ".$nome;
echo "<br>E-mail: ".$email;
echo "<br>Telefone: ".$tel;

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, endereco_usuario, bairro_usuario, cidade_usuario, estado_usuario, celular_usuario)
         VALUES ('".$nome."','".$email."','".$tel."','".$endereco."','".$bairro."','".$cidade."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso.";
else 
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);



     

?>