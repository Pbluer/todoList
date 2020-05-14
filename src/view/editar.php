<?php
    require_once("C:/xampp/htdocs/todoList/src/config/config.php");
    $tabela = $_GET['tabela'];
    $id = $_GET['id'];    
    $value = DataBase::pegarDado($tabela,$id);
    
    foreach($value as $dado){
        $value= $dado['texto'];
    }  
    if(!empty($_POST['texto'])){
        DataBase::editar($tabela,$id,$_POST['texto']);
    }else{
        
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
            <h2>Editar</h2>
            <form action="" method="POST">
                <textarea type="text" name="texto"> <?= $value ?> </textarea>
                <button>Enviar</button>
            </form>            
        </div>
    </div>
</body>
</html>