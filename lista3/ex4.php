<?php
$data = date("m-d-Y");
$dia = substr($data,3,2);
$mês = substr($data,0,2);
$ano = substr($data,6,4);
$novadata = $dia . "/" . $mês . "/" . $ano;
echo $novadata;
?>