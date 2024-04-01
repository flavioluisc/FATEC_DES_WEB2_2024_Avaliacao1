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
        .wrapper{ width: 350px; padding: 20px;}
        #center{display: flex; flex-direction: row; justify-content: center; align-items: center;}
    </style>
</head>
<body>
    <h1>Cadastro de motos</h1>
    <div id="center">
        <form action="cadastro-motos2.php" method="post">
            <div class="form-group">
                <label>Nome do aluno</label>
                <input type="text" name="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>RA</label>
                <input type="text" name="RA" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Placa</label>
                <input type="text" name="placa" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <a href="welcome.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>
