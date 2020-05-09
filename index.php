<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style/index.css">
    <title>To-Do List</title>
</head>
<body>

    <header>
        <h1>To-Do List</h1>
        <button></button>
    </header>

    <div class="container">

        <?php
         
            require("C:/xampp/htdocs/todoList/src/config/database.php") ;
        
            
            DataBase::GetInformation($sql);
        ?>

    </div>

</body>
</html>