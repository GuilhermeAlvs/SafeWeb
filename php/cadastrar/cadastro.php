<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>Cadastro</h1>
    <div>
        <?php
            if (isset($_SESSION["mensagem"])){
                echo $_SESSION["mensagem"];
                unset($_SESSION["mensagem"]);
            }
    
        ?>
    </div>
    <form action="../functions/func_cadastro.php" method="POST">
        <label for="">E-mail:</label>
        <input type="email" name="email"><br><br>
        <label for="">Senha : </label>
        <input type="password" name="senha"><br><br>
        <button>Cadastrar</button>
    </form>
</body>
</html>
