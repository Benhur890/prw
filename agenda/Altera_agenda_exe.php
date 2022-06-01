<?php
    include('conexao.php');
     // Upload da foto     
  $fotoNome = $_FILES['foto']['name'];
  $target_dir = "uploud/";
  $target_file = $target_dir . basename($_FILES["foto"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){      
      // Upload file
      if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
          $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
      }
  }


    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome: " . $nome . "<p>";
    echo "<p> Apelido: " . $apelido . "<p>";
    echo "<p> Email: " . $email . "<p>";
    echo "<p> Telefone: " . $tel . "<p>";
    echo "<p> Endereço: " . $endereco. "<p>";
    echo "<p> Bairro: " . $bairro . "<p>";
    echo "<p> Cidade: " . $cidade . "<p>";
    echo "<p> Estado: " . $estado . "<p>";
    echo "<p> Celular: " . $celular . "<p>";


                if(isset($fotoNome)){
                    $sql = "UPDATE agenda SET
                            nome='".$nome."',
                            email='".$email."',
                            telefone='".$tel."',
                            apelido='".$apelido."',
                            endereco='".$endereco."',
                            bairro='".$bairro."',
                            cidade='".$cidade."',
                            estado='".$estado."',
                            celular='".$celular."'
                            foto_blob='".$fotoBlob."',
                            foto_nome='".$fotoNome."'
                            WHERE id_agenda=".$id_agenda;
                  }
                  else
                  {
                    $sql = "UPDATE agenda SET
                               nome='".$nome."',
                        email='".$email."',
                        telefone='".$tel."',
                        apelido='".$apelido."',
                        endereco='".$endereco."',
                        bairro='".$bairro."',
                        cidade='".$cidade."',
                        estado='".$estado."',
                        celular='".$celular."'
                        WHERE id_agenda=".$id_agenda;
                  }
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso <br>";
    else 
        echo "Erro ao alterar o banco de dados: ".mysqli_error($con)."<br>";

?>

<br>
<a href='index.php'> Voltar </a>