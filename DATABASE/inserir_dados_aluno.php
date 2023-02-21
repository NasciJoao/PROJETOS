<?php
//indica ao navegador que este é um documento php
require ("conecta_banco.php");
//insere o programa conecta_banco.php a este programa
$insere = "INSERT INTO cadastro_aluno (codigo,nome,email,senha) 
VALUES ('','$_POST[nome]','$_POST[email]','$_POST[senha]')";
//$insere = "INSERT INTO ira acessar a tabela cadastro_aluno e nas tags codigo, nome, email, senha 
//e os valores digitados em nome, email, senha na pagina html sera recolhdo pela tag $_POST e inserido no BD
mysqli_query($con, $insere) or die ("nao inseriu");
echo "dados inseridos no banco!";
?>