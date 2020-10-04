<?php
require 'config.php';

$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email and senha = :senha");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if($sql->rowCount() > 0) {
     header("Location: opcoes.html");
    } else {
        ?> <script>alert("Usuário não encontrado")</script> <?php
    }
