<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <h1>Motos cadastradas</h1>
    <?php
        $arquivo = 'motos.txt';
        $conteudo = file_get_contents($arquivo);
        echo nl2br($conteudo);
    ?>
    <br>
    <div class="form-group">
        <a href="welcome.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>

