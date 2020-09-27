<?php

$db = new PDO('mysql:host=localhost;dbname=methode_agile', 'root','');

$req = $db->prepare('UPDATE users SET username=:username, firstname=:firstname, surname=:surname, email=:email');

$req->bindValue(':username', $_POST['username'],PDO::PARAM_STR);
$req->bindValue(':firstname', $_POST['firstname'],PDO::PARAM_STR);
$req->bindValue(':surname', $_POST['surname'],PDO::PARAM_STR);
$req->bindValue(':email', $_POST['email'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: profile.php");
}
