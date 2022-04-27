<?php
    include('conexao.php');
    $sql = "SELECT * FROM usuarios";
    // retorna todos os dados da consulta
    $result = mysql_query($con, $sql);
    // resulta a primeira linha
    $row = mysql_fetch_array($result);
    print_r($row);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     
     <title>Listagem de usuários</title>
 </head>
 <body>
     <h1>Listagem de usuários</h1>
     <table border="1" align="center" widht=500>
         <tr>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
         </tr>
         <?php
            while(mysqli_fetch_array($result)){
                
            }
         
         
         ?>
     </table>
 </body>
 </html>