<?php
//Definição das variáveis e conexão
define('HOST','sql300.epizy.com');
define('USER', 'epiz_26453223');
define('PASS', '3T7BD6Ppgzm');
define('DB', 'epiz_26453223_banco_tsi');

//Criação da conexão com o banco de dados

$conn = mysqli_connect(HOST, USER, PASS, DB) or die('Não foi possível conectar no banco');

//Retorna para a página de formulário
header("Location:formulário.html");