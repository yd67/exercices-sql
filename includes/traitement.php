<?php
require_once('bdd.inc.php');

$req = $bdd->prepare('INSERT INTO aprennant (pseudo, codepostal, ville) VALUES (?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['codepostal'], $_POST['ville']));
header('Location: ../index.php?read');
 //echo '<pre>' ;
//var_dump($bdd);
//var_dump($req);



?>