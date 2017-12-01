
<div id="tela_buscas" class="telas">
  <div id="barra_superior_botoes_git" class="bloco_interno">
    <select id="select_linguagem">
      <option value="" selected="selectd">Escolha</option>
      <option value="php" selected="selectd">PHP</option>
      <option value="ruby" selected="selectd">RUBY</option>
      <option value="python" selected="selectd">PYTHON</option>
      <option value="c#" selected="selectd">C#</option>
      <option value="cobol" selected="selectd">COBOL</option>
    </select>
    <input id="bt_buscar_repositorios" type="button" class="bt_geral" value="Buscar" onclick="buscar_repositorios()">
  </div>
  <div id="repositorios_git"></div>
  <div id="barra_inferior_botoes_git" class="bloco_interno">
    <input id="bt_grava_repositorio" type="button" class="bt_geral" value="Gravar" onclick="grava_repositorio()">
    <input id="bt_detalhe_repositorio" type="button" class="bt_geral" value="Detalhes" onclick="detalhe_repositorio()">
  </div>
</div>
