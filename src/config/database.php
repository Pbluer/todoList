<?php


class DataBase{

    public function GetConnection(){
        
        $data = parse_ini_file('C:\xampp\htdocs\todoList\src\database\data.ini');

        $sql = mysqli_connect($data['host'],$data['user'],$data['password'],$data['database']);

        if($sql->connect_error){
            die('Error: ' . $sql->connect_error);
        }else{
            echo "Passou!";
        }

        return $sql;
    }

    public function GetInformation(){

        $sql = self::GetConnection();

        $comenado = "SELECT * FROM usuario";
        
        while($dados = mysqli_fetch_assoc($comenado)){
            echo "<p> {$dados['tarefas']}</p>";
        }
        
        mysqli_close($sql);
        
    }

}

DataBase::GetConnection();