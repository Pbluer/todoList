<?php


class DataBase{

    public function GetConnection(){
        
        $data = parse_ini_file('C:\xampp\htdocs\todoList\src\database\data.ini');

        $sql = mysqli_connect($data['host'],$data['user'],$data['password'],$data['database']);

        if($sql->connect_error){
            die('Error: ' . $sql->connect_error);
        }

        return $sql;
    }

    public function getComecar(){

        $sql = "SELECT * FROM comecar";
        $conexao = DataBase::GetConnection();
        $resultado = $conexao->query($sql);

        $registro= [];

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $registro[] = $row;
            }
        }elseif($conexao->error){
            echo "Error: " . $conexao->error;
        }  
        
        return $registro;
    }

    public function sendText($tabela,$texto,$id = 'null'){
        
        $sql = DataBase::GetConnection();
        $query = "INSERT INTO `main`.`$tabela` (`ID`,`texto`) VALUES ('{$id}','{$texto}')";    
        
        $envio = $sql->query($query);

        if($envio){
            return header('Location: http://localhost/todoList/index.php');     
        }else{
            echo $sql->error;
        }       
    }

}
