<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loja-Página Inicial</title>
</head>
<body>
    <div class="conteudo">
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){

                echo "<section class='container'>";

                    echo "<h1>Olá, ".$_SESSION['usuario'].". Cadastre um cliente!</h1>";

                    echo "<form method='get' action='dadosClientes.php' class='login'>";

                        echo "<span> Nome: <input type='text' name='nome'> </span>";

                        echo "<span> Endereço: <input type='text' name='endereco'> </span>";

                        echo "<span> Telefone: <input type='text' name='telefone'> </span>";

                        echo "<span> CPF: <input type='text' name='cpf'> </span>";

                        echo "<span> Número cartão de crédito: <input type='text' name='numeroCartao'> </span>";

                        echo "<span> Idade: <input type='text' name='idade'> </span>";

                        echo " <span>";

                            echo "<input type='submit' name='Enviar' value='Cadastrar'>";

                        echo "</span>";

                    echo "</form>";

                echo "</section>";
            }
        ?>
    </div>
    
</body>
</html>