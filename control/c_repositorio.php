<?php

require_once('../model/repositorio.php');
//recebe opção e argumentos via POST
$opt = $_POST['opcao'];

//opção de execução
switch ($opt) {
  case '1':
    $repo = new repositorio;
    $resultado = $repo->gravar_repositorio($_POST['id'], $_POST['nome'], $_POST['linguagem'], $_POST['descricao'], $_POST['html_url'], $_POST['url'], $_POST['criado_em'], $_POST['forks']);
    echo json_encode($resultado);

  case '2':
      $repo = new repositorio;
      $resultado = $repo->buscar_repositorios();
      echo json_encode($resultado);
      break;

  case '3':
      $repo = new repositorio;
      $resultado = $repo->buscar_detalhes_repositorio($_POST['id']);
      echo json_encode($resultado);
      break;

  case '4':
      $repo = new repositorio;
      $resultado = $repo->apagar_repositorio($_POST['id']);
      echo json_encode($resultado);
      break;

default:
      echo "Opção inválida.";
      break;
}
