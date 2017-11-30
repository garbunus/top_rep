/*#####################################################################################
EXECUTA ALTERAÇÕES SOBRE DIVERSAS FUNÇÕES COMO ALTERAÇÃO DE ARGUMENTOS E COMPORTAMENTO
#####################################################################################*/

//altera argumento da função "grava_repositorio()", setando qual repositorio deve ser gravado
function escreve_arg_grava_repositorio(ident){
  $("#bt_grava_repositorio").attr("onclick","grava_repositorio("+ ident +")");
}

function escreve_arg_grava_repositorio(ident){
  $("#bt_grava_repositorio").attr("onclick","detalhe_repositorio("+ ident +")");
}
