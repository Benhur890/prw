<?php
    include('conexao.php');
    $data = $_POST['data'];
    $tipo = $_POST['radio1'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1> Alteração de dados </h1>";
    $sql = "UPDATE fluxo_caixa SET
                nome='".$data."',
                tipo='".$tipo."',
                valor='".$valor."',
                cheque='".$cheque."',
               historico='".$historico."'
                WHERE id=".$id;


    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso <br>";
    else 
        echo "Erro ao alterar o banco de dados: ".mysqli_error($con)."<br>";

?>

<br>
<a href='index.php'> Voltar </a>