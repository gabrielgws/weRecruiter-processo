<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "weRecruiter";

try {
  $conn = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
  //echo "Conexão com banco de dados realizado com sucesso.";
} catch (PDOException $err){
  //echo "Erro: Conexão com o banco de dados não realizado com sucesso. Erro gerado"
  //. $err->getMessage();
}