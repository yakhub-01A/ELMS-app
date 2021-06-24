<?php 
// DB credentials.
define('DB_HOST','z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','woledewihiw4wnio');
define('DB_PASS','q5pdn5hmsnx3lx3b');
define('DB_NAME','inliyotpgo2b372c');
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
