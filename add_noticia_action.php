<?php
require 'config.php';

$titulo = filter_input(INPUT_POST, 'titulo');
$descricao = filter_input(INPUT_POST, 'descricao');

    $sql = $pdo->prepare("INSERT INTO noticias (titulo, descricao) VALUES (:titulo, :descricao)");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':descricao', $descricao);
    $sql->execute();

    ?>

    <script>alert("Notícia cadastrada com sucesso!")</script>

    <?php
     header("Location: home.html");

