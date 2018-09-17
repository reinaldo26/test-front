<?php
global $db;

define('BASE_URL', 'http://localhost/Projects/test-front-end-mvc');
define('DB_NAME', 'test-front');
define('HOST', 'localhost');
define('USER' ,'root');
define('PASS', '');

try {
	$db = new PDO("mysql:dbname=".DB_NAME.";host=".HOST, USER, PASS);
} catch(PDOExeption $e) {
	echo "ERRO: ".$e.getMessage();
}

