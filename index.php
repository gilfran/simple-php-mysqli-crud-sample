<?php 

require_once("User.php");
require_once("ServiceUser.php");

$server 	= "localhost";
$user 		= "root";
$pass 		= "";
$database 	= "teste";


// Conexão com MySQL
@$mysqli = new mysqli($server,$user,$pass,$database);

// Tratamento de Erro
if (mysqli_connect_errno()) {
	echo "Falha ao conectar: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	exit;
}

// Instanciando usuário
//$user = new User($mysqli);

// Insert
// $user = new User($mysqli);
// $user->setName("Raia")->setEmail("raia@email.com");
// echo $user->insert();

// Update
// $user = new User($mysqli);
// $user->setName("Caminha")->setEmail("caminha@email.com")->setId(60);
// echo $user->update();

// Deletar

//echo $user->delete(4);

// List
// $ret = $user->list("name");
// foreach ($ret as $key => $value) {
// 	echo "ID: ".$value["id"]."<br/>";
// 	echo "Nome: ".$value["name"]."<br/>";
// 	echo "E-mail: ".$value["email"]."<br/><hr>";
// }

// Find
// $ret = $user->find(1);
// echo $ret['id']."<br/>";
// echo $ret['name']."<br/>";
// echo $ret['email']."<br/>";

// Usando a classe ServiceUser com as operações de banco
// Instanciando usuário com nova classe
$user = new User();

$serviceUser = new ServiceUser($mysqli, $user);

// Find
// $ret = $serviceUser->find(8);
// echo $ret['id']."<br/>";
// echo $ret['name']."<br/>";
// echo $ret['email']."<br/>";

// Insert
// $user->setName("Eita mah")->setEmail("eitamah@email.com");
// echo $serviceUser->insert();

// Update
// $user->setName("Fulaninho")->setEmail("fulaninho@email.com")->setId(9);
// echo $serviceUser->update();

// Delete
//echo $serviceUser->delete(6);

// List
$ret = $serviceUser->list("name");
foreach ($ret as $key => $value) {
	echo "ID: ".$value["id"]."<br/>";
	echo "Nome: ".$value["name"]."<br/>";
	echo "E-mail: ".$value["email"]."<br/><hr>";
}