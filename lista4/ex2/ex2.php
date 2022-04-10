<?php
echo "Caixa de texto de uma linha: ". $_GET["txtTexto"]. "<br>";

echo "Caixa de texto de rolagem: ". $_GET["rolagem"]. "<br>";

echo "Caixa de seleção: ". $_GET["checkbox"]. "<br>";


echo "Botão de opção: ". $_GET["radio"]. "<br>";
$lista = isset($_GET['lista']) ? $valor=$_GET['lista']: 0;
echo "Menu Suspenso: ". $lista. "<br>";

?>