<?php 
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <style type="text/css">
        body{ 
            font: 14px sans-serif; text-align: center;
            }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
        <br><br>
        Bem vindo ao site</h1>
        <br>
    </div>
    <p>
        <a href="cadastro-motos.php" class="btn btn-primary">Registrar motos</a>
        <a href="cadastro-carros.php" class="btn btn-primary">Registrar carros</a>
        <br><br>
        <a href="consulta-motos.php" class="btn btn-default">Consultar motos</a>
        <a href="consulta-carros.php" class="btn btn-default">Consultar carros</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>