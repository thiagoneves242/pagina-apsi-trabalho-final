<?php
//Importe do arquivo de conexão
include_once("./conexao.php");

//Variáveis com os valores do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_STRING);
$areaAtuacao = filter_input(INPUT_POST, 'areaAtuacao[areaAtuacao]', FILTER_SANITIZE_STRING);

//Teste do checkbox
$r1 = "";
$valor = "";
$camposelecionado = "";
$form = array();

if(isset($_POST['areaAtuacao'])){
    $form = $_POST['areaAtuacao'];
    var_dump($_POST["areaAtuacao"]);

    foreach($form as $valor){
        if(!empty($valor)){
            $camposelecionado = ", $valor";
        }
    }
    if(strlen($camposelecionado)>0){
        $camposelecionado = substr($camposelecionado,1, strlen($camposelecionado));
    }
    $r1 = implode(",", $form);
}

$resultado_pesquisa = "INSERT INTO pesuisa_ifb (nome, idade, cidade, turno, areaAtuacao, createT) VALUES 
('$nome', '$idade', '$cidade', '$turno', '$r1', NOW())";

$pesquisa = mysqli_query($conn, $resultado_pesquisa);
header("Location:formulario.html");