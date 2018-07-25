<?php 

require_once("config.php");

//Carrega um usuário
$root = new Usuario();
$root->loadbyId(10);
echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("Sávio PDO ","savio@dteste.com.br", "@lun0");
//$aluno->insert();
//echo $aluno;


//Alterar um usuário
//$usuario = new Usuario();
//
//$usuario->loadById(7);
//
//$usuario->update("Tranks","gra@webplace.com.br", "!@#$%¨&*");
//
//echo $usuario;


//$usuario = new Usuario();
//
//$usuario->loadById(7);
//
//$usuario->delete();
//
//echo $usuario;
 ?>