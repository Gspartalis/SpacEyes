<?php
require 'config.php';

$id_noticia = filter_input(INPUT_POST, 'id_noticia');
$titulo = filter_input(INPUT_POST, 'titulo');
$descricao = filter_input(INPUT_POST, 'descricao');


    $sql = $pdo->prepare("UPDATE noticias SET titulo = :titulo, descricao = :descricao WHERE id_noticia = :id_noticia");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':id_noticia', $id_noticia);
    $sql->execute();

    header("Location: home.html");
    exit;
    
 
