<?php
// LEMBRAR DO ENCTYPE!!
include("conexao.php");
$fotoNome = $_FILES['foto']['name'];
  $target_dir = "uploud/";
  $target_file = $target_dir . basename($_FILES["foto"]["name"]);



  
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){        
      // Upload file
      if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
          $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
      }
  }
  
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];


echo "<br>Nome: ".$nome;
echo "<br>Apelido: ".$apelido;
echo "<br>E-mail: ".$email;
echo "<br>Telefone: ".$tel;
echo "<br>Endereço: ".$endereco;
echo "<br>Bairro: ".$bairro;
echo "<br>Cidade: ".$cidade;
echo "<br>Estado: ".$estado;
echo "<br>Celular: ".$celular;


$sql = "INSERT INTO agenda (nome, apelido,email, telefone, endereco, bairro, cidade, estado, celular, foto_blob, foto_nome)
         VALUES ('".$nome."','".$apelido."','".$email."','".$tel."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$celular."','".$fotoBlob."','".$fotoNome."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso.";
else 
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);



     

?>