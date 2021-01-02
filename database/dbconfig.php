<?php
 
 define('DB_SERVER','localhost');
define('DB_USER','root'); // justcasting_justcasting 
define('DB_PASS' ,'');  // justcasting@&456
define('DB_NAME', 'justcasting');  // justcasting_justcasting
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


function mysqli_real_escape_string_walker(&$item, $key) {
global $con;
if (!is_numeric($item)) {
$item = filter_var($item, FILTER_SANITIZE_STRING);
$item = $con->real_escape_string($item);
//$item = str_replace('<script>','',$item);
}
}
if (ISSET($_POST)) {
array_walk_recursive($_POST, 'mysqli_real_escape_string_walker'); 
}
if (ISSET($_GET)) {
array_walk_recursive($_GET, 'mysqli_real_escape_string_walker'); 
}
if (ISSET($_REQUEST)) {
array_walk_recursive($_REQUEST, 'mysqli_real_escape_string_walker'); 
}



if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>