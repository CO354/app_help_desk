<?php 
	//A funcao para iniciar a sessao em php
	session_start();


	// A sessao em php ela iniciada acima de todos os codigos php.

	// mas  a recomendacao diz que deve ser iniciada antes do comando de impressao como o echo

	// variavel que verifica se a autenticacao foi realizado


	
	$usuario_autenticado = false;
	$usuario_id = null;

	$usuario_perfil_id = null;

	$perfis = array(1 => 'administrativo', 2 => 'usuario');

// usuarios do sistema;
$usuarios_app = array(
	array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
	array('id' => 2,'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
	array('id' => 3 ,'email' => 'anselmo@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
	array('id' => 4,'email' => 'amigo@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
);


	

foreach($usuarios_app as $user){

	if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
		$usuario_autenticado = true;
		$usuario_id = $user['id'];
		$usuario_perfil_id = $user['perfil_id'];

	}

}
if($usuario_autenticado){
		echo 'Usuário foi autenticado';
		$_SESSION['authenticate'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		 header('Location: home.php');
	}else{
		$_SESSION['authenticate'] = 'NAO';
		header('Location: index.php?login=erro');
	}




?>