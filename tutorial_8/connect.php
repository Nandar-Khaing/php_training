
<?php
$dsn = 'mysql:host=localhost;dbname=tutorial_8';
$username = 'root';
$password = 'root';
$option = [];
try{
  $connection = new PDO($dsn,$username,$password,$option);

}catch(PDOException $e){

}