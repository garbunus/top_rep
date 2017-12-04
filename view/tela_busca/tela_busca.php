
<div id="tela_buscas" class="telas">
  <div id="barra_superior_botoes_git" class="bloco_interno">
    <div class="titulo">Busca de repositórios</div>
    <div class="legenda_input">Escolha uma linguagem para fazer a busca:</div>
    <select id="select_linguagem">
      <option value="" selected="selectd">Escolha</option>
      <option value="php" selected="selectd">PHP</option>
      <option value="ruby" selected="selectd">RUBY</option>
      <option value="python" selected="selectd">PYTHON</option>
      <option value="shell" selected="selectd">SHELL</option>
      <option value="cobol" selected="selectd">COBOL</option>
    </select>
    <input id="bt_buscar_repositorios" type="button" class="bt_geral" value="Buscar" onclick="buscar_repositorios()">
  </div>
  <div id="cabecalho_repositorios_git">
    <table>
      <tr>
        <td style="width:240px;">Nome:</td><td style="width:340px;">Descrição:</td><td style="width:180px;">Criado em:</td><td style="width:80px;"></td>
      </tr>
    </table>
  </div>
  <div id="repositorios_git"></div>
  <div id="barra_inferior_botoes_git" class="bloco_interno">
    <input id="bt_grava_repositorio" type="button" class="bt_geral" value="Gravar" onclick="grava_repositorio()">
    <input id="bt_detalhe_repositorio" type="button" class="bt_geral" value="Detalhes" onclick="detalhe_repositorio_git()">
  </div>
</div>
