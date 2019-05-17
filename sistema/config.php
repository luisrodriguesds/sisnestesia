<?php
	//teste
	//LOCAL
	//BANCO DE DADOS
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'sinestesia');
	define('PREFIX', 'sn');
	define('CHARSET', 'utf8');

	define('URLBASE', 'http://localhost/projetosinestesia/');

	//URLS
	define('URL_BASE', 'http://localhost/projetosinestesia/login/');
	define('URL_PAINEL', URL_BASE.'painel/');

	//DIRS
	define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/projetosinestesia/');
	define('DIR_SYSTEM', DIR_BASE.'sistema/');
	define('DIR_IMG', DIR_BASE.'images/');
	// define('DIR_IMG_BOL', DIR_BASE.'login/painel/imagensBolsistas/');

	//DIRS PARA PDF
	define('DIR_PDF', DIR_BASE.'painel/pdfs/');
	define('DIR_VIDEOS', DIR_BASE.'painel/videos/');

	//FILES
	define('FLIE_CONFIG', DIR_SYSTEM.'config.php');
	define('FLIE_HELPERS', DIR_SYSTEM.'helpers.php');
	define('FLIE_DATABASE', DIR_SYSTEM.'database.php');
	define('FILE_CONNECTION', DIR_SYSTEM.'connection.php');


	// //REMOTO
	// //BANCO DE DADOS
	// define('HOSTNAME', 'localhost');
	// define('USERNAME', 'root');
	// define('PASSWORD', '97646060');
	// define('DATABASE', 'stratus');
	// define('PREFIX', 'net');
	// define('CHARSET', 'utf8');

	// define('URLBASE', 'http://201.38.172.21/netClass/');

	// //URLS
	// define('URL_BASE', 'http://201.38.172.21/netClass/');
	// define('URL_PAINEL', URL_BASE.'users/');

	// //DIRS
	// define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/netClass/');
	// define('DIR_SYSTEM', DIR_BASE.'sistema/');
	// define('DIR_IMG', DIR_BASE.'images/');
	// // define('DIR_IMG_BOL', DIR_BASE.'login/users/imagensBolsistas/');

	// define('DIR_PDF', DIR_BASE.'users/pdfs/');
	// define('DIR_VIDEOS', DIR_BASE.'users/videos/');
	// //FILES
	// define('FLIE_CONFIG', DIR_SYSTEM.'config.php');
	// define('FLIE_HELPERS', DIR_SYSTEM.'helpers.php');
	// define('FLIE_DATABASE', DIR_SYSTEM.'database.php');
	// define('FILE_CONNECTION', DIR_SYSTEM.'connection.php');

?>