/*###################################################################################
   Busca dados de repositórios para linguagem selecionada
###################################################################################*/
function busca_repositorios(){
  var dados = { 'linguagem' : $('#select_linguagem option:selected').val()};
  $.ajax({
        url: "https://api.github.com/users/google/repos",
        type: 'GET',
        dataType: 'json',
        //async: 'false',
        //data: dados,
        beforeSend: function(){
           $('#loading').css('display', 'block');
        },
        success: function(data){
            console.log(data);
            $('#loading').css('display', 'none');
            var html_party = '<table class="tab_lista">';
            for(var i = 0; i < data.length; i++){
              html_party += '<tr class="linha_lista" onclick="destacar(this), escreve_arg_detalhe_repositorio(' + data[i].xxxxx + '), escreve_arg_grava_repositorio(' + data[i].xxxxx + ')"><td style="width:100px;">' + data[i].repo + '</td><td style="width:250px;">' + data[i].carac1 + '</td><td style="width:250px;">' + data[i].carac2 + '</td></tr>';
            };
            html_party += '</table>';
            $('#repositorios_git').html(html_party);
        },
        error: function (data, string, string2) {
            console.log (data);
            console.log (string);
            console.log (string2);

            $('#loading').css('display', 'none');
        },
        complete: function (){
        }
    });
}


/*###################################################################################
   Preenche campo específico com repositórios encontrados com a busca realizada
###################################################################################*/
function preenche_resultados_busca(){

}

function mostra_detalhes(){
  $('#detalhes_git').dialog('open');
}
