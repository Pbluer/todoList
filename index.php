<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/public/style/index.css">
    <link rel="stylesheet" href="./src/public/style/tablet.css">
    <title>To-Do List</title>
</head>
<body>

    <header>
        <h1>To-Do List</h1>
    </header>
    
    <?php
         
        require("C:/xampp/htdocs/todoList/src/config/config.php");
        $comecar = DataBase::pegarDados('comecar'); 
        $fazendo = DataBase::pegarDados('fazendo'); 
        $finalizado = DataBase::pegarDados('finalizado'); 
    ?>

    <div class="container">
        
        <!-- comecar -->
        <div class="estilo" id="comecar">

            <span class="header">
                <h2>Começar</h2>
                <a href="./src/view/comecar.php"><img src="./src/public/icon/adicionar.svg" alt="Adicionar"></a>
            </span>
            <?php foreach($comecar as $texto): ?>
                <div class="deveres">
                    <p> <?= $texto['texto'] ?></p>
                    <div class="links">
                        <a href="./src/view/editar.php?id=<?= $texto['ID']?>&tabela=comecar" id="editar"><img src="./src/public/icon/editar.svg" alt="editar"></a>
                        <a href="./src/view/excluir.php?id=<?= $texto['ID']?>&tabela=comecar" id="apagar"><img src="./src/public/icon/apagar.svg" alt="apagar"></a>
                    </div>
                </div>                
            <?php endforeach ?>
        </div>
        
        <!-- fazendo -->
        <div class="estilo" id="fazendo">
            <span class="header">
                <h2>Fazendo</h2>
                <a href="./src/view/fazendo.php"><img src="./src/public/icon/adicionar.svg" alt="Adicionar"></a>
            </span>
            <?php foreach($fazendo as $texto): ?>
                <div class="deveres" id=" <?= $texto['ID'] ?>">
                    <p> <?= $texto['texto'] ?></p>
                    <div class="links">
                        <a href="./src/view/editar.php?id=<?= $texto['ID']?>&tabela=fazendo" id="editar"><img src="./src/public/icon/editar.svg" alt="editar"></a>
                        <a href="./src/view/excluir.php?id=<?= $texto['ID']?>&tabela=fazendo" id="apagar"><img src="./src/public/icon/apagar.svg" alt="apagar"></a>
                    </div>
                </div>                
            <?php endforeach ?>
        </div>    

        <!-- finalizado -->
        <div class="estilo" id="finalizado">
            <span class="header">
                <h2>Finalizado</h2>
                <a href="./src/view/finalizado.php"><img src="./src/public/icon/adicionar.svg" alt="Adicionar"></a>
            </span>
            <?php if(count($finalizado) > 0): ?>
                <?php foreach($finalizado as $texto): ?>                
                    <div class="deveres">
                        <p> <?= $texto['texto'] ?></p>
                        <div class="links">
                            <a href="./src/view/editar.php?id=<?= $texto['ID']?>&tabela=finalizado" id="editar"><img src="./src/public/icon/editar.svg" alt="editar"></a>
                            <a href="./src/view/excluir.php?id=<?= $texto['ID']?>&tabela=finalizado" id="apagar"><img src="./src/public/icon/apagar.svg" alt="apagar"></a>
                        </div>
                    </div>                
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>   
</div>

</body>
</html>