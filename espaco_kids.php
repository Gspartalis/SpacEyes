<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM noticias");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!doctype HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/estilos.css" />
        <title>1v5</title>
    </head>
    <body>
    <header class="masthead mb-auto">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="home.html">Home</a>
            <a class="nav-link" href="espaco_kids.php">Espaço Kids</a>
            <a class="nav-link" id="history" href="login.html">História recente</a>
            <a class="nav-link" href="relatorio_espacial.html">Relatório Espacial</a>
            <a class="nav-link" href="cadastro.html">Artigos</a>
            <a class="nav-link" href="http://esamultimedia.esa.int/multimedia/virtual-tour-iss/">Tour Virtual</a>
            </div>
          </div>
        </nav>
      </header>

        <img src="./assets/images/todas/home.png" class="img-fluid" >
        <img src="./assets/images/todas/primeira.jpg" class="img-fluid" >
        <img src="./assets/images/todas/segunda.jpg" class="img-fluid" >
        <img src="./assets/images/todas/terceira.jpg" class="img-fluid" >
        <img src="./assets/images/todas/quarta.jpg" class="img-fluid" >
        <img src="./assets/images/todas/quinta.jpg" class="img-fluid" >

        <script type="text/javascript" src="assets/js/jquery-3-3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>