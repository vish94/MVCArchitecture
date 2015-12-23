<?php

	if($_SERVER['HTTP_HOST']=="localhost") {
		defined('DB_SERVER') ? null : define('DB_SERVER', 'localhost');
		defined('DB_USER') ? null : define('DB_USER', 'root');
		defined('DB_PASS') ? null : define('DB_PASS', 'password');
		defined('DB_NAME') ? null : define('DB_NAME', 'databasename');
	} else {
		defined('DB_SERVER') ? null : define('DB_SERVER', 'localhost');
		defined('DB_USER') ? null : define('DB_USER', 'root');
		defined('DB_PASS') ? null : define('DB_PASS', 'password');
		defined('DB_NAME') ? null : define('DB_NAME', 'databasename');
	}

?>