/*###################################################################################
              Controle de exibição de telas de busca de repositório
                    e visualização de repositórios armazenado
###################################################################################*/

function mostra_tela_busca(){
   $('.telas').css('display', 'none');
   $('#tela_buscas').css('display','block');
}

function mostra_tela_armazenados(){
  $('.telas').css('display', 'none');
  $('#tela_armazenados').css('display','block');
}

function boas_vindas(){
  $('#welcome').css('display','block');
  $("#welcome").delay(2000).fadeOut(300);
}

$(document).ready(function () {
  mostra_tela_busca();
});
