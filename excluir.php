<?php
require 'config.php';

$id_noticia = filter_input(INPUT_GET, 'id_noticia');
if($id_noticia) {

    $sql = $pdo->prepare("DELETE FROM noticias WHERE id_noticia = :id_noticia");
    $sql->bindValue(':id_noticia', $id_noticia);
    $sql->execute();

}

header("Location: home.html");
exit;