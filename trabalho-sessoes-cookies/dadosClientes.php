<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loja-Cliente cadastrado</title>
</head>
<body>
    
    <div class="conteudo">
        <?php

            session_start();
            if(isset($_SESSION['usuario'])){

                $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
                $endereco = isset($_GET['endereco']) ? $_GET["endereco"] : null;
                $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
                $cpf = isset($_GET['cpf']) ? $_GET["cpf"] : null;
                $numeroCartao = isset($_GET['numeroCartao']) ? $_GET['numeroCartao'] : null;
                $idade = isset($_GET['idade']) ? $_GET['idade'] : null;

                if (isset($_GET['Enviar'])){
                    echo "<h1>Estes são os dados do cliente cadastrados:</h1>";
                    echo "<p>Nome: ".$nome."</p>";
                    echo "<p>Endereço: ".$endereco."</p>";
                    echo "<p>Telefone: ".$telefone."</p>";
                    echo "<p>CPF: ".$cpf."</p>";
                    echo "<p>Número do cartão: ".$numeroCartao."</p>";
                    echo "<p>Idade: ".$idade."</p>";
                }
            }
        ?>

    </div>
</body>
</html>