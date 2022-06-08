<?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    // retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);
 

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     
     <title>Consulta de Fluxo Caixa</title>
 </head>
 <body>
     <h1>Consulta de Fluxo Caixa</h1>
     <table border="1" align="center" widht=500>
         <tr>
             <th>Código:</th>
             <th>Data:</th>
             <th>Tipo:</th>
             <th>Valor:</th>
             <th>Histórico: </th>
             <th>Cheque:</th>
             <th>Excluir</th>
         </tr>
         <?php
            while($row= mysqli_fetch_array($result)){
                echo "<td>".$row['id'] ."</td>";
                echo "<td>".$row['data'] ."</td>";
                echo "<td>".$row['tipo'] ."</td>";
                echo "<td>".$row['valor'] ."</td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>'".$row['historico']. "</a></td>";
                echo "<td>".$row['historico'] ."</td>";
                echo "<td>".$row['cheque'] ."</td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
         
         
         ?>
     </table>
 </body>
 </html>