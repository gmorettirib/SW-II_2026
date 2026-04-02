 <?php
    //cria o array associativo
    $dados = array("Nome"=>"lapis", "preco"=>2, "quantidade"=>55);

    $json_str = json_encode($dados);

    file_put_contents("dados.json", $json_str)
?>