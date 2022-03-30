<?php
$num=0;
   while($num<200){
       $num++;
        $cont=0;
        $resto=0;
       for($i=1;$i<=$num;$i++){
            $resto=$num%$i;
            if($resto==0){
                $cont++;
            }
        }
        if($cont>2){
            echo $num ." não é um número primo". "<br>";
        }
        
        if($cont<=2){
            echo $num ." é um número primo". "<br>";
       }
      
    }

    
?>