<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do envio</title>
</head>
<body>
    
    <main>
        <?php
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            session_start();

            $_SESSION['nome'] = $nome;
            $_SESSION['idade'] = $idade;


            echo 'nome: '. $_SESSION['nome']. ' idade: '. $_SESSION['idade'];

            session_destroy();
        ?>

    <br><br>
    <a href="index.php">Voltar</a>
    </main>

</body>
</html>