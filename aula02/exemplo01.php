<?php 
   
    echo "<br>";
    for($i = 1; $i <= 8; $i++){
        if($i % 2 == 1 ){
            $texto = "aprovado";
        } else{
            $texto = "reprovado";
        }
        echo "Numero: " . $i . " ==> ". $texto ."<br>";  
    }
    
?>