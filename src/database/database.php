<?php


class DataBase{

    public  static function GetConnection(){
        
        $data = parse_ini_file('data.ini');

        $sql = mysqli_connect($data['host'],$data['user'],$data['password'],$data['database']);

        if($sql->connect_error){
            die('Error: ' . $sql->connect_error);
        }

        return $sql;
    }

    public static function pegarDados($tabela){

        $query = "SELECT * FROM {$tabela}";
        $sql = DataBase::GetConnection();
        $resultado = $sql->query($query);

        $registro= [];

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $registro[] = $row;
            }
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }  
        
        return $registro;
    }    

    public static function enviarTexto($tabela,$texto,$id = 'null'){
        
        $sql = DataBase::GetConnection();
        $query = "INSERT INTO `main`.`$tabela` (`ID`,`texto`) VALUES ('{$id}','{$texto}')";    
        
        $envio = $sql->query($query);

        if($envio){
            $sql->close();
            return header('Location: http://localhost/todoList/index.php');     
        }else{
            echo $sql->error;
        }       
    }

    public static function pegarDado($tabela,$id){

        $sql = DataBase::GetConnection();
        $query = "SELECT * FROM $tabela WHERE (`ID`= $id)";
        $value = $sql->query($query);

        $registro= [];
        

        if($value->num_rows > 0){
            while($row = $value->fetch_assoc()){
                $registro[] = $row;
            }
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }  
        
        return $registro;        
    }

    public static function editar($tabela,$id,$texto){
        
        $sql = DataBase::GetConnection();
        $query = "UPDATE `main`.`$tabela` SET `texto` = '$texto' WHERE (`ID` = '$id')";

        $resultado = $sql->query($query);
        if($resultado){
            $sql->close();
            return header('Location: http://localhost/todoList/index.php'); 
        }else{
            echo $sql->error;
        }
    }

    public function excluirDado($tabela,$id){
        $sql = DataBase::GetConnection();
        $query = "DELETE FROM `$tabela` WHERE (`ID` = '$id')";
        $resultado = $sql->query($query);
        if($resultado){
            return header('Location: http://localhost/todoList/index.php'); 
        }else{
            echo "Erro: " . $sql->error;
        }
    }
}


/* 
UPDATE `main`.`comecar` SET `texto` = 'Compra café' WHERE (`ID` = '52') and (`texto` = 'Compra pão');

*/