<?php
//Incluir a conexao com o banco de dados
include_once './conexao.php';

//receber os dados da requisição
$dados_requisicao = $_REQUEST;

//lista de colunas na tabela
$colunas = [
  0 => 'id',
  0 => 'firt_name',
  0 => 'last_name',
  0 => 'gender',
  0 => 'adress',
  0 => 'birthday',
];


//obter a quantidade de registros no banco de dados
$query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios FROM usuarios";
$result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
$result_qnt_usuarios->execute();
$row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);
//var_dump($row_qnt_usuarios);

//recuperar os registros do banco de dados
/*$query_usuarios = "SELECT id, firt_name, last_name, gender, adress, birthday 
                    FROM usuarios
                      ORDER BY id DESC
                      LIMIT :inicio, :quantidade";*/
$query_usuarios = "SELECT id, firt_name, last_name, gender, adress, birthday FROM usuarios";
$query_usuarios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_usuarios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);
$result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
  //var_dump($row_usuario);
  extract($row_usuario);
  $registro = [];
  $registro[] = $id;
  $registro[] = $firt_name;
  $registro[] = $last_name;
  $registro[] = $gender;
  $registro[] = $adress;
  $registro[] = $birthday;
  $dados[] = $registro;
}
//var_dump($dados);

//cria o array de informações a serem retornadas para o javascript
$resultado = [
  "draw" => intval($dados_requisicao['draw']), //para cada requisição é enviado um número como parâmetro
  "recordsTotal" => intval($row_qnt_usuarios['qnt_usuarios']),//quantidade de registros que há no banco de dados
  "recordsFiltered" => intval($row_qnt_usuarios['qnt_usuarios']),//total de registros quando houver pesquisa
  "data" => $dados //array de dados com os registros retornados da tabela usuarios

];
//var_dump($resultado);

//retornar os dados em formato de objeto pra o javascript
echo json_encode($resultado);
?>