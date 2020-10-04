<?php
require 'config.php';

$info = [];
$id_noticia = filter_input(INPUT_GET, 'id_noticia');

    $sql = $pdo->prepare("SELECT * FROM noticias WHERE id_noticia = :id_noticia");
    $sql->bindValue(':id_noticia', $id_noticia);
    $sql->execute();

    if($sql->rowCount() > 0) {

        $info = $sql->fetch( PDO::FETCH_ASSOC );

    } else {
        header("Location: home.html");
        exit;
    }

?>
<head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <title>LGPD - Lei Geral de Proteção de Dados</title>
    </head>
<h1>Editar Notícia</h1>

<div class="container">
        <form method="POST" action="editar_noticia_action.php">
            <div class="form-group col-md-6">

            <input type="hidden" name="id_noticia" value="<?=$info['id_noticia'];?>" />

              <label for="titulo">Título</label>
              <input name="titulo" type="text" value="<?=$info['titulo'];?>" class="form-control"  aria-describedby="titulo" placeholder="Título...">
              
            </div>
            <div class="form-group col-md-6">
              <label for="descricao">Descrição</label>
              <input name="descricao" type="text" value="<?=$info['descricao'];?>" class="form-control"  aria-describedby="descricao" placeholder="Descrição...">
              
            </div>  
            
            <div class="col-md-3">
              <button type="submit" class="btn btn-success align-right">Editar</button>
            </div>
          </form>
        </div>