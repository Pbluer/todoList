<?php
    require("C:/xampp/htdocs/todoList/src/config/config.php");

    if(!empty($_POST['texto'])){

        $dados = $_POST['texto'];

        DataBase::enviarTexto('comecar',$dados);
    }else{
        error_reporting(0);
    }
    
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/index.css">
    <link rel="stylesheet" href="../public/style/adicionar.css">
    <title>To-Do List</title>
</head>
<body>

    <header>
        <h1>To-Do List</h1>       
    </header>

    <div class="container">

        <div id="caixa">
            <h2>Começar</h2>

            <form action="" method="POST">
                <input type="text" name="texto">
                <button>Enviar</button>
            </form>            
        </div>
    </div>
</body>
</html>