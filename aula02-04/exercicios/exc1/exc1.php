<?php

$produto = [
    "nome"=>"teclado",
    "preco"=>200,
    "qntd"=>12
]  ;
  
$jsonProduto = json_encode($produto);

file_put_contents("produtos.json", $jsonProduto)
?>