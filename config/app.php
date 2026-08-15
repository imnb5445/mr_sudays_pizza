<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'db_mrsundays');

define('SITE_URL', 'http://localhost:8080/mr_sundays_pizza/');

include_once('conn.php');
$db = new database();


function validate_input($dbcon, $input)
{
    return mysqli_real_escape_string($dbcon, $input);
}

function rediret($message, $location)
{
    $redirectTo = SITE_URL . $location;
    $_SESSION['message'] = $message;
    header("Location: " . $redirectTo);
    exit();
}
?>