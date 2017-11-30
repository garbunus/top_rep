/*#####################################################################################
                FUNÇÕES DE VALIDAÇÃO E COMPORTAMENTO DE ENTRADAS
#####################################################################################*/


//destacar linha onclick em tabela específica
function destacar(item){
    $('.linha_lista').removeClass('linha_lista_checked');
    $(item).addClass('linha_lista_checked');
}
