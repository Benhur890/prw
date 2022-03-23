<?php
$n1=1;
$n2=2;
$n3=3;
    if($n1>$n2 && $n2>$n3 && $n1>$n2)
    echo $n1. $n2. $n3;
    
    elseif($n1>$n2 && $n3>$n2 && $n1>$n3)
    echo $n1. $n3. $n2;

    elseif($n2>$n1 && $n1>$n3 && $n2>$n1)
    echo $n2. $n1. $n3;

    elseif($n2>$n1 && $n3>$n1 && $n2>$n3)
    echo $n2.  $n3.  $n1;

    elseif($n3>$n1 && $n2>$n1 && $n3>$n2)
    echo $n3.  $n2. $n1;
    elseif($n3>$n1 && $n1>$n2 && $n3>$n1)
    echo $n3.  $n1.  $n2;
    
?>