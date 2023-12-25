<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja-Login</title>
</head>
<body>
    <div class="conteudo">
        <?php
            $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
            $senha = isset($_POST['senha']) ? $_POST["senha"] : null;

            if (isset($_POST['Enviar']))
            {
                if(($usuario == "Nathan") && ($senha = "hetielle")){
                
                    session_start();

                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['senha'] = $senha;

                    header('location: ./paginaPrincipal.php');


                }
                else{
                    echo"Usuário não encontrado!";
                }
            }
        ?>
    </div>
    
</body>
</html>