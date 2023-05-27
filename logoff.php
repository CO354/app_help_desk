<?php  

session_start();

/*
echo '<pre>';

print_r($_SESSION);

echo '</pre>';
	// remover indices do array de sessao especificos serve para remover qualquer array e pode ser usado para remover sessoes so que os indices um por um.
	// funcao nativa unset();

unset($_SESSION['x']); // aqui sera verificaco se existe, se existe sera destruida


//destruir a variavel de sessao completamente de toda acessao em formacao usando a funcao nativa session_destroy();

//session_destroy();

session_destroy();
// Apos destruir as session deve forcar o redirecionamento para pagina requisicao novamente

echo '<pre>';

print_r($_SESSION);

echo '</pre>';

*/

session_destroy();

header('Location: index.php');

?>