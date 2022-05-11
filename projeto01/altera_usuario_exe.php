<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";

    $sql = "UPDATE usuario SET
                nome_usuario='".$nome."',
                email_usuario='".$email."',
                telefone_usuario='".$telefone."'
                WHERE id_usuario=".$id_usuario;

    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso <br>";
    else 
        echo "Erro ao alterar o banco de dados: ".mysqli_error($con)."<br>";

?>

<br>
<a href='index.php'> Voltar </a>