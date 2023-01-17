<?php

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['firt_name'])){
  $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Primeiro Nome!</div>"];
}elseif(empty($dados['last_name'])){
  $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Sobrenome!</div>"];
}elseif(empty($dados['gender'])){
  $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Sexo!</div>"];
}elseif(empty($dados['adress'])){
  $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo endereço/local!</div>"];
}elseif(empty($dados['birthday'])){
  $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Ano de Nascimento!</div>"];
}else{
  $query_usuario = "INSERT INTO usuarios (firt_name,last_name,gender,adress,birthday) VALUES (:firt_name,:last_name,:gender,:adress,:birthday)";
  $cad_usuario = $conn->prepare($query_usuario);
  $cad_usuario->bindParam(':firt_name',$dados['firt_name']);
  $cad_usuario->bindParam(':last_name',$dados['last_name']);
  $cad_usuario->bindParam(':gender',$dados['gender']);
  $cad_usuario->bindParam(':adress',$dados['adress']);
  $cad_usuario->bindParam(':birthday',$dados['birthday']);
  $cad_usuario->execute();

  if($cad_usuario->rowCount()){
    $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>"];
  }else{
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não cadastradado!</div>"];
  }
}

echo json_encode($retorna);