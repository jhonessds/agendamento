<?php 

//nome que ficará na página
$titulo = "Liberar Campo - SCIDEP";

//'session_start();'comando que indica que a página terá acesso as variavéis de sessão
//por convenção deve ser sempre a primeira instrução no script
//inicia o acesso a variavel de sessão
session_start();

//faz a inclusão das paginas de cabeçalho e menu 
include 'master_page_cabecalho.php';
include 'master_page_menu.php';

?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Página em Branco</h1>
      <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"><a href="inicio.php"></i>&nbsp;Iníco</li></a>
      <li class="breadcrumb-item"><a href="#">Liberar Campo</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">Create a beautiful dashboard</div><br>
        <div class="tile-body">Create a beautiful dashboard</div>
      </div>
    </div>
  </div>
</main>
<?php
include'master_page_rodape.php'  ?>
</body>
</html>