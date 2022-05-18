<?php

include("conexao.php");

$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$email = $_GET['email'];
$tel = $_GET['tel'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$celular = $_GET['celular'];




echo "<br>Nome: ".$nome;
echo "<br>Apelido: ".$apelido;
echo "<br>E-mail: ".$email;
echo "<br>Telefone: ".$tel;
echo "<br>Endereço: ".$endereco;
echo "<br>Bairro: ".$bairro;
echo "<br>Cidade: ".$cidade;
echo "<br>Estado: ".$estado;
echo "<br>Celular: ".$celular;


$sql = "INSERT INTO agenda (nome, apelido,email, telefone, endereco, bairro, cidade, estado, celular)
         VALUES ('".$nome."','".$apelido."','".$email."','".$tel."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$celular."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso.";
else 
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);



     

?>