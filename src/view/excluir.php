<?php

    require_once("C:/xampp/htdocs/todoList/src/config/config.php");
    $id = $_GET['id'];
    $tabela = $_GET['tabela'];

    DataBase::excluirDado($tabela,$id);
