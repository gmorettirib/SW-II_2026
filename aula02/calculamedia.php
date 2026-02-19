<?php 

    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;
    $media = ($nota1+$nota2+$nota3)/3;
    echo "nota 1:" . $nota1 . "<br>"  . "nota 2:" . $nota2 . "<br>" . "nota 3:" . $nota3 . "<br>";
    if($media >= 7){
        echo "Média: " . $media . "Aprovado!";
    } else {
        echo "Média: " . $media . " Reprovado!";
    }

?>