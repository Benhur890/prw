<?php

 include('conexao.php');
 $id_usuario = $_GET['id_usuario'];
 $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>


<body>
    <fieldset>
    <legend><h1> Alteração de Usuário </h1></legend>

    <form action="cadastro_usuario.php" method="GET">
    
        <div>
            <label for="">Nome: </label>
            <input type="text" name="nome"
            value="<?php echo $row['nome_usuario'] ?>" placeholder="Digite o nome">
        </div>
        <br>
        <div>
            <label for="">E-mail: </label>
            <input type="email" name="email" 
            value="<?php echo $row['email_usuario'] ?>" placeholder="Digite o email">
        </div>
        <br>
        <div>
            <label for="">Telefone: </label>
            <input type="text" name="tel"
            value="<?php echo $row['telefone_usuario'] ?>" placeholder="Digite o telefone">
        </div>

        <br>

        <button type="submit">Enviar</button>
    </fieldset>

    </form>
</body>


</html>