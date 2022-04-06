<?php
// Set up the database connection
//$dsn = 'mysql:host=my-guitar-shop.cv4tkmjfiroz.us-east-1.rds.amazonaws.com;dbname=my_guitar_shop2';
//$username = 'admin';
//$password = 'password';

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
$username = 'root';
$password = '';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>