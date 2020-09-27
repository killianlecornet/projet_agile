<?php

$db = new PDO('mysql:host=localhost;dbname=methode_agile', 'root','');

$req = $db->prepare('UPDATE carte SET card=:card, date=:date, CVV=:CVV ');

$req->bindValue(':card', $_POST['card'],PDO::PARAM_STR);
$req->bindValue(':date', $_POST['date'],PDO::PARAM_STR);
$req->bindValue(':CVV', $_POST['CVV'],PDO::PARAM_STR);


$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: modif_paiement.php");
}