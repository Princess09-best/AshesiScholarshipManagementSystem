<?php 
// DB credentials.
define('DB_HOST','169.239.251.102');
define('DB_USER','princess.balogun');
define('DB_PASS','ZyxB09$$');
define('DB_NAME','webtech_fall2024_princess_balogun');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>