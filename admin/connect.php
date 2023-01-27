<?php
ob_start();
$dsn      = 'mysql:host=localhost;dbname=sociestt_myform';
$username = 'root';
$password ='';
$option   =array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
try{
    $connect = new PDO($dsn , $username ,$password , $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'Good now coonect to database';
}
catch(PDOException $e){
    echo 'failed to connect' .$e->getMessage();
}
ob_end_flush();
?>

