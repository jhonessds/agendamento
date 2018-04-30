<?php 

//nome que ficará na página
$titulo = "Início - SCIDEP";

//'session_start();'comando que indica que a página terá acesso as variavéis de sessão
//por convenção deve ser sempre a primeira instrução no script
//inicia o acesso a variavel de sessão
session_start();

if (!isset($_SESSION['usuario'])){
 header('Location: index.php?erro=1');
}

//faz a inclusão das paginas de cabeçalho e menu 
include 'master_page_cabecalho.php';
include 'master_page_menu.php';

//chama o arquivo com o resultado da query
require 'banco/querys/query_inicio_colp.php';

//chama o arquivo com o resultado da query
require 'banco/querys/query_inicio_emp.php';

?>
<!-- Página inicial-->
<main class="app-content">
  <div class="app-title">
   <div>
    <h1><i class="fa fa-dashboard"></i> Sistema de Cadastro do Instituto de Desenvolvimento Profissional</h1>
    <p></p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
  </ul>
</div>
<div class=" tile row">
  <div>   
    <!-- Página inicial-->   
    <!-- '$_SESSION['usuario']' variável de sessão-->
    <h1 class="mb-12">Bem Vindo(a) <?= $_SESSION['usuario'] ?></h1>
    <h3 class="tile-title">Nosso sistema está crescendo, contamos com...</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Diretores</h4>
        <p><b>5</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Colportores</h4>
        <p><b><?php echo $dados_inicio_colp['count(id_login)']; ?></b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small warning coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Líderes</h4>
        <p><b>10</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small danger coloured-icon"><i class="icon fa fa-building fa-3x"></i>
      <div class="info">
        <h4>Empresas</h4>
        <p><b><?php echo $dados_inicio_emp['count(id_emp)']; ?></b></p>
      </div>
    </div>
  </div>
</div>
<?php

//faz a inclusão da página de rodapé 
include'master_page_rodape.php'  

?>
</body>
</html>