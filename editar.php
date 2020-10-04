<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM noticias");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <title>LGPD - Lei Geral de Proteção de Dados</title>
    </head>

    <header class="masthead mb-auto">
        <div class="inner">
          <nav class="nav nav-masthead justify-content-left">
            <a class="nav-link active" href="home.html">Home</a>
            <a class="nav-link" href="mudancas.php">Tudo que mudou</a>
            <a class="nav-link" id="login" href="login.html">Login</a>
          </nav>
        </div>
      </header>

<h3>Edição de Publicações</h3>

<table class="table table-dark col-sm-6" >
    <thead>
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>DESCRIÇÃO</th>
        <th>AÇÕES</th>
    </tr>
   </thead>
    <?php foreach($lista as $noticias): ?>
    <tbody>
        <tr>
            <td><?=$noticias['id_noticia'];?></td>
            <td><?=$noticias['titulo'];?></td>
            <td><?=$noticias['descricao'];?></td>
            <td>
                <a href="editar_noticia.php?id_noticia=<?=$noticias['id_noticia'];?>">[ Editar ]</a>
                <a href="excluir.php?id_noticia=<?=$noticias['id_noticia'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    
    <script type="text/javascript" src="assets/js/jquery-3-3.1.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</table>