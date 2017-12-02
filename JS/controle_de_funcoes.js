/*#####################################################################################
EXECUTA ALTERAÇÕES SOBRE DIVERSAS FUNÇÕES COMO ALTERAÇÃO DE ARGUMENTOS E COMPORTAMENTO
#####################################################################################*/

//altera argumento da função "grava_repositorio()", setando qual repositorio deve ser gravado
function escreve_arg_grava_repositorio(id, name, language, description, html_url, url, created_at, forks){
  $('#bt_grava_repositorio').attr('onclick','grava_repositorio(' + id + ', \'' + name + '\',\'' + language + '\', \'' + description + '\', \'' + html_url + '\', \'' + url + '\', \'' + created_at + '\', ' + forks + ')');
}

//altera argumento da função "detalhe_repositorio()", setando qual repositorio deve ser visualizado
function escreve_arg_detalhe_repositorio(id, name, language, description, html_url, url, created_at, forks){
  $('#bt_detalhe_repositorio').attr('onclick','detalhe_repositorio(' + id + ', \'' + name + '\', \'' + language + '\', \'' + description + '\', \'' + url + '\', \'' + created_at + '\', ' + forks + ')');
}

//altera argumento da função "apaga_repositorio_armazenado()", setando qual repositorio deve ser apagado
function escreve_arg_apaga_repositorio_armazenado(ident){
  $("#bt_apaga_repositorio_armazenado").attr("onclick","apaga_repositorio_armazenado("+ ident +")");
}

//altera argumento da função "detalhe_repositorio()", setando qual repositorio deve ser visualizado
function escreve_arg_detalhe_repositorio_armazenado(ident){
  $("#bt_detalhe_repositorio_armazenado").attr("onclick","detalhe_repositorio_armazenado("+ ident +")");
}
