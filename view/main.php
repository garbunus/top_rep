<?php ?>
<!DOCTYPE html>
<HTML>
  <HEAD>
    <meta charset="utf8">
    <title>TOP{repo}</title>

    <!-- ADD JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <!-- ADD SCRIPTS DESENVOLVEDOR-->
    <script src="../JS/JS_relacionamento_git.js" type="text/javascript"></script>
    <script src="../JS/JS_repositorios.js" type="text/javascript"></script>
    <script src="../JS/controle_de_funcoes.js" type="text/javascript"></script>
    <script src="../JS/controle_de_entradas.js" type="text/javascript"></script>
    <script src="../JS/controles_de_tela.js" type="text/javascript"></script>
    <script src="../JS/widget_modal.js" type="text/javascript"></script>

    <!-- ADD STYLE-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans|Raleway:100,200,300,400" rel="stylesheet">
    <link href="../estilo/estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="img/logo_uni.png" type="image/x-icon" />

    <script>
      $(document).ready(function(){
        boas_vindas();
      });
    </script>

  </HEAD>
  <BODY>
    <div id="tela_app">
      <div id="barra_sup">
        <ul>
          <li class="bt_telas" onclick="mostra_tela_busca()">Buscar</li>
          <li class="bt_telas" onclick="mostra_tela_armazenados()">Dados Armazenados</li>
          <li class="about"><img src="img/logo_long.png" style="height:20px; margin-top:3px;"/></li>
        </ul>
      </div>
      <?php
          include "tela_busca/tela_busca.php";
          include "tela_armazenados/tela_armazenados.php";
          include "detalhes.php";
          include "feedback.php";

      ?>
    </div>
  </BODY>
</HTML>
