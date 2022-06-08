<?php

 include('conexao.php');
 $id = $_GET['id'];
 $sql = 'SELECT * FROM fluxo_caixa where id ='.$id;
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
    <legend><h1> Alteração Fluxo do Caixa </h1></legend>
   
    <form method = "post" action="Altera_fluxo_exe.php"enctype='multipart/form-data'>

    
        <div>
            <label for="">Data: </label>
            <input type="date" name="data"
            value="<?php echo $row['data'] ?>" placeholder="Data:">
        </div>
        <br>
        <div>
            <label for="">Tipo: </label>
            <input type="radio" name="radio1" value="Entrada"> Entrada 
            <input type="radio" name="radio1" value="Saida"> Saída <br>
        </div>
        <br>
        <div>
            <label for="">Valor: </label>
            <input type="decimal" name="valor"
            value="<?php echo $row['valor'] ?>" placeholder="Digite o valor">
        </div>
        <div>
             <label for="">Histórico: </label>
            <input type="text" name="historico"
            value="<?php echo $row['historico'] ?>" placeholder="Digite o historico">
        </div>
        <div>
        <label for="Cheque">Cheque: </label>
            <select name="cheque" value="valordefault">
            <option value="Sim">Sim</option>
            <option value="Nao">Não</option
            value="<?php echo $row['cheque'] ?>" placeholder="Cheque":>>
        </div>

        <br>
        <input type="submit">Enviar</input>
        </fieldset>

    </form>
</body>


</html>