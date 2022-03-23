<?php
$n1=1;
$n2=2;
$n3=3;
    if($n1>$n2 && $n2>$n3)
    echo $n1 " a" $n2 " a" $n3;
    
    if($n1>$n2 && $n3>$n2)
    echo $n1 " a" $n3 "a " $n2;

    if($n2>$n1 && $n1>$n3)
    echo $n2 "a " $n1 " a" $n3;
    if($n2>$n1 && $n3>$n1)
    echo $n2 " a" $n3 " a" $n1;

    if($n3>$n1 && $n2>$n1)
    echo $n3 " a" $n2 " a" $n1;
    if($n3>$n1 && $n1>$n2)
    echo $n3 " a" $n1 " a" $n2;
    

?>