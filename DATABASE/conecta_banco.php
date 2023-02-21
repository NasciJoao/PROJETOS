<?php 
//abre o arquivo php
$servidor = 'localhost'; 
// indica ao codigo que no campo servidor devera ser digitado 'localhost'
$banco = 'aluno';
//indica ao codigo que o banco usado sera o banco 'aluno'
$usuario = 'root';
//indica ao codigo que o usuario 'root' devera ser utilizado
$senha = '';
// indica ao codigo que nao ha senha para acessar o banco de dados

//conectar ao servidor
$con = mysqli_connect ($servidor,$usuario,$senha);
//$con = mysqli_connect conecta o programa ao banco de dados utilizando os dados salvos nas tags $servidor, $usuario, $senha
if (!($con)) 
//indica que se caso algum erro ocorra ao inserir os dados acima a mensagem abaixo devera ser printada
{
    echo "não foi possivel estabelecer uma conexão com o mysql.";
    exit;
}

//selecionar o banco de dados
$selected = mysqli_select_db ($con, "aluno");
//$selected = mysqli_select_db seleciona um banco de dados, apos fazer a conexao ($con) ele procura pelo banco "aluno"
if(!($selected))
//indica que caso aconteça algum erro no codigo acima, a mensagem abaixo devera ser printada 
{
    echo "nao foi possivel selecionar o gerenciador mysql.";
    exit;
}
?>