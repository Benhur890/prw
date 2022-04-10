<?php
$data = date("m-D-Y");
$dia = substr($data,3,2);
    if($dia=="Su"){
        echo "Domingo";
    }
    if($dia=="Sat"){
        echo "Sábado";
    }
    if($dia=="Mo"){
        echo "Segunda";
    }
    if($dia=="Tue"){
        echo "Terça";
    }
    if($dia=="Wed"){
        echo "Quarta";
    }
    if($dia=="Thu"){
        echo "Quinta";
    }
    if($dia=="Fri"){
        echo "Sexta";
    }
?>