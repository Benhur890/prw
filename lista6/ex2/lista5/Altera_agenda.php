<?php

 include('conexao.php');
 $id_agenda = $_GET['id_agenda'];
 $sql = 'SELECT * FROM agenda where id_agenda ='.$id_agenda;
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
    <legend><h1> Alteração Agenda </h1></legend>

    <form method = "post" action="altera_agenda_exe.php">
    
        <div>
            <label for="">Nome: </label>
            <input type="text" name="nome"
            value="<?php echo $row['nome'] ?>" placeholder="Digite o nome">
        </div>
        <br>
        <div>
            <label for="">E-mail: </label>
            <input type="email" name="email" 
            value="<?php echo $row['email'] ?>" placeholder="Digite o email">
        </div>
        <br>
        <div>
            <label for="">Telefone: </label>
            <input type="text" name="tel"
            value="<?php echo $row['telefone'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Apelido: </label>
            <input type="text" name="apelido"
            value="<?php echo $row['apelido'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Endereco: </label>
            <input type="text" name="endereco"
            value="<?php echo $row['endereco'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Bairro: </label>
            <input type="text" name="bairro"
            value="<?php echo $row['bairro'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Estado </label>
            <input type="text" name="estado"
            value="<?php echo $row['telefone'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Celular </label>
            <input type="text" name="celular"
            value="<?php echo $row['celular'] ?>" placeholder="Digite o telefone">
        </div>
        <div>
            <label for="">Cidade: </label>
            <input type="text" name="cidade"
            value="<?php echo $row['cidade'] ?>" placeholder="Digite o telefone">
        </div>


        <br>

        <button type="submit">Enviar</button>
        <input name ="id_agenda" type="hidden" value="<?php echo $row ['id_agenda']?>">
        </fieldset>

    </form>
</body>


</html>