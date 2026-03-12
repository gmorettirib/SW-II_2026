<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processamento</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');
        $ano = $ano_atual - $idade        
    ?>
    <p></p>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>O ano de nascimento é: <?php echo $ano; ?></p>
    <?php if ($idade <= 18) {
            echo "<p style = 'color: green';> Você é menor de idade</p>";
        } else {
            echo "<p style = 'color: red';> Você é maior de idade</p>";
        }
        echo " <p>LISTA DE CLIENTES</p>";
        echo "<ul>";
        for ($i=1; $i <= 7 ; $i++) { 
            echo "<li>cliente $i    </li>";
        };
        echo "</ul>";
        
    ?>    
</body>
</html>