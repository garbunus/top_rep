/*###################################################################################
   Busca dados de repositórios para linguagem selecionada
###################################################################################*/
function buscar_repositorios(){
  var linguagem = $('#select_linguagem option:selected').val();
  $.ajax({
        url: "https://api.github.com/search/repositories?q=language:"+ linguagem +"&sort=stars",
        type: 'GET',
        dataType: 'json',
        //async: 'false',
        //data: dados,
        beforeSend: function(){
           $('#loading').css('display', 'block');
        },
        success: function(data){
            console.log(data);
            var itens = data['items'];
            var html_party = '<table class="tab_lista">';
            for(var i = 0; i < itens.length; i++){
              html_party += '<tr class="linha_lista" onclick="destacar(this), escreve_arg_detalhe_git(' + itens[i].id + ', \'' + itens[i].name + '\', \'' + itens[i].language + '\', \'' + itens[i].description + '\', \'' + itens[i].url + '\', \'' + itens[i].created_at + '\', ' + itens[i].forks + '), escreve_arg_grava_repositorio('  + itens[i].id + ',  \'' + itens[i].name + '\', \'' + itens[i].language + '\', \'' + itens[i].description + '\', \'' + itens[i].html_url + '\', \'' + itens[i].url + '\', \'' + itens[i].created_at + '\', ' + itens[i].forks + ')"><td style="width:250px;">' + itens[i].name + '</td><td style="width:350px;">' + se_nulo(itens[i].description) + '</td><td style="width:180px;">' + dataUStoPTBR(itens[i].created_at) + '</td><td style="width:80px;"><a href=\"' + itens[i].html_url + '\" target="_blank">Acessar</a></td></tr>';
            };
            html_party += '</table>';
            $('#repositorios_git').html(html_party);

            $('#loading').css('display', 'none');
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

function detalhe_repositorio_git(id, name, language, description, url, created_at, forks){
  var html_party = '<table class="tab_lista">';
  html_party += '<tr class="linha_lista"><td class="legenda">ID:</td><td>'+ id +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="legenda">Nome:</td><td>'+ name +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="legenda">Linguagem:</td><td>'+ language +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="legenda">Descrição:</td><td style="width:400px;">'+ description +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="legenda">Criado em:</td><td>'+ dataUStoPTBR(created_at) +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="legenda">Forks:</td><td>'+ forks +'</td></tr>';
  html_party += '<tr class="linha_lista"><td class="td_link" colspan="2"><a href=\"'+ url +'\" target="_blank">Quero mais detalhes<a></td></tr>';
  html_party += '</table>';

  $('#detalhes_git').html(html_party);
  $('#detalhes_git').dialog({ title: "Detalhes do Repositório" });
  $('#detalhes_git').dialog('open');
}
