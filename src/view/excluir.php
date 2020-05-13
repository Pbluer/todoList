<?php

    require_once("C:/xampp/htdocs/todoList/src/config/config.php");
    print_r($_GET);
    $id = $_GET['id'];
    $tabela = $_GET['tabela'];

    DataBase::excluirDado($tabela,$id);