<?php

$host='localhost';
$db='06-sql';
$user='root';
$password='';
  
  $bdd = new PDO('mysql:host=' .$host .';dbname=' . $db .';charset=utf8', $user ,$password );
 // $bdd= new PDO('mysql:host=localhost;dbname-06sql;charset=utf8')

?>