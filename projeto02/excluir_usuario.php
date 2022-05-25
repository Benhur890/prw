<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'DELETE FROM usuario WHERE id_usuario='.$id_usuario;
    echo "<h1> Exclusão de Usuário </h1>";
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>