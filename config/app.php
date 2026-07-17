<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'aaaaaaa');

include_once('conn.php');
$db = new database();
$db->connect();

?>