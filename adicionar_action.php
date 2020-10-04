<?php
require 'config.php';

$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($senha && $email) {

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (senha, email) VALUES (:senha, :email)");
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':email', $email);
        $sql->execute();

     header("Location: login.html");
     
    } 
} else {
    header("Location: home.html");
    exit;
}