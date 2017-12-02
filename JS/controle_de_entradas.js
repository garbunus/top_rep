/*#####################################################################################
                FUNÇÕES DE VALIDAÇÃO E COMPORTAMENTO DE ENTRADAS
#####################################################################################*/


//destacar linha onclick em tabela específica
function destacar(item){
    $('.linha_lista').removeClass('linha_lista_checked');
    $(item).addClass('linha_lista_checked');
}

//verifica se valor é nulo
function se_nulo(valor){
  if (valor == null){
    return "Não há informação disponível na fonte.";
  }else{
    return valor;
  }
}

//######################  conversão de formatos de datas ############################

//************       converter formato de data yyyy-mm-dd para formato do usuário      *******************
function dataUStoPTBR(umaData){
    var data = new Date(umaData);
    var novaData = data.toLocaleString();
    return novaData;
}
