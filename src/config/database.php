<?php

$data = parse_ini_file('data.ini');

$mysql = mysqli_connect($data['host'],$data['user'],$data['pass1word'],$data['database']);

if($mysql->connect_error){
    dir('Error('. $mysql->connect_error . ')' . $mysql->connect_error);
}else{
    echo "Conectado";
}

