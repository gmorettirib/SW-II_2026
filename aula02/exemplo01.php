<?php 
    $nota = 7;
    
    echo "<br>";
    for($i = 1; $i <= 5; $i++){
        if($i % 2 == 0 ){
            $resto = "aprovado";
        } else{
            $resto = "reprovado";
        }
        echo "Numero: " . $i ."=====>". $resto . "<br>";  
    }
    
?>