
function grava_repositorio(id, nome, linguagem, descricao, html_url, url, criado_em, forks){
  if(id == null){
    alert('Selecione um repositório na lista.');
  }else{
      var dados = { opcao: 1, 'id':id, 'nome':nome, 'linguagem':linguagem, 'descricao':descricao, 'html_url':html_url, 'url':url, 'criado_em':criado_em, 'forks':forks };
      $.ajax({
            url: "../control/c_repositorio.php",
            type: 'POST',
            dataType: 'json',
            data: dados,
            beforeSend: function(){
               $('#loading').css('display', 'block');
            },
            success: function(data){
                console.log(data);
                //converte conteudo para string
                var str = data.toString();
                //testa se foi enviada mensagem de erro da transação no banco de dados
                if(str.indexOf('SQLSTATE') > -1){
                  //se sim exibe mensagem de erro adequada
                  $('#feedback_text_erro').html(data);
                  $('#loading').css('display', 'none');
                  $('#check_erro').css('display', 'block');
                  $("#check_erro").delay(1500).fadeOut(300);
                }else{
                  $('#feedback_text_ok').html(data);
                  $('#loading').css('display', 'none');
                  $('#check_ok').css('display', 'block');
                  $("#check_ok").delay(1500).fadeOut(300);
                  //atualiza lista de repositórios para o usuário
                  busca_repositorios_armazenados();
                }
            },
            error: function (data, string, string2) {
                console.log (data);
                console.log (string);
                console.log (string2);
                $('#feedback_text_erro').html(data);
                $('#loading').css('display', 'none');
                $('#check_erro').css('display', 'block');
                $("#check_erro").delay(1500).fadeOut(300);

            },
            complete: function (){
            }
        });
    }
}

function busca_repositorios_armazenados(){
  var dados = {'opcao': 2};
  $.ajax({
        url: "../control/c_repositorio.php",
        type: 'POST',
        dataType: 'json',
        data: dados,
        beforeSend: function(){
           $('#loading').css('display', 'block');
        },
        success: function(data){
            console.log(data);
            var itens = data;
            var html_party = '<table class="tab_lista">';
            for(var i = 0; i < itens.length; i++){
              html_party += '<tr class="linha_lista" onclick="destacar(this), escreve_arg_apaga_repositorio_armazenado(' + itens[i].id + '), escreve_arg_detalhe_repositorio_armazenado(' + itens[i].id + ')"><td style="width:250px;">' + itens[i].nome + '</td><td style="width:350px;">' + se_nulo(itens[i].descricao) + '</td><td style="width:180px;">' + se_nulo(itens[i].linguagem) + '</td><td style="width:80px;"><a href=\"' + itens[i].html_url + '\" target="_blank">Acessar</a></td></tr>';
            };
            html_party += '</table>';
            $('#repositorios_armazenados').html(html_party);
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

function detalhe_repositorio_armazenado(id){
  if(id == null){
    alert('Selecione um repositório na lista.');
  }else{
      var dados = {'opcao': 3, 'id': id};
      $.ajax({
            url: "../control/c_repositorio.php",
            type: 'POST',
            dataType: 'json',
            data: dados,
            beforeSend: function(){
               $('#loading').css('display', 'block');
            },
            success: function(data){
                console.log(data);
                var itens = data;
                var html_party = '<table class="tab_lista">';
                html_party += '<tr class="linha_lista"><td class="legenda">ID:</td><td>'+ data['id'] +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="legenda">Nome:</td><td>'+ data['nome'] +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="legenda">Linguagem:</td><td>'+ data['linguagem'] +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="legenda">Descrição:</td><td style="width:400px;">'+ data['descricao'] +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="legenda">Criado em:</td><td>'+ dataUStoPTBR(data['criado_em']) +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="legenda">Forks:</td><td>'+ data['forks'] +'</td></tr>';
                html_party += '<tr class="linha_lista"><td class="td_link" colspan="2"><a href=\"'+ data['url'] +'\" target="_blank">Quero mais detalhes<a></td></tr>';
                html_party += '</table>';

                $('#detalhes_git').html(html_party);
                $('#detalhes_git').dialog({ title: "Detalhes do Repositório" });
                $('#detalhes_git').dialog('open');
                $('#loading').css('display', 'none');
            },
            error: function (data, string, string2) {
                console.log (data);
                console.log (string);
                console.log (string2);

                $('#loading').css('display', 'none');
              }
            });
        }
    }




function apaga_repositorio_armazenado(id){
  if(id == null){
    alert('Selecione um repositório na lista.');
  }else{
        if(confirm("Deseja tirar este repositório do banco de dados?")){
        var dados = {'opcao': 4, 'id': id};
        $.ajax({
              url: "../control/c_repositorio.php",
              type: 'POST',
              dataType: 'json',
              data: dados,
              beforeSend: function(){
                 $('#loading').css('display', 'block');
              },
              success: function(data){
                  console.log(data);
                  //converte conteudo para string
                  var str = data.toString();
                  //testa se foi enviada mensagem de erro da transação no banco de dados
                  if(str.indexOf('SQLSTATE') > -1){
                    //se sim exibe mensagem de erro adequada
                    $('#feedback_text_erro').html(data);
                    $('#loading').css('display', 'none');
                    $('#check_erro').css('display', 'block');
                    $("#check_erro").delay(1500).fadeOut(300);
                  }else{
                    $('#feedback_text_ok').html(data);
                    $('#loading').css('display', 'none');
                    $('#check_ok').css('display', 'block');
                    $("#check_ok").delay(1500).fadeOut(300);
                    //atualiza lista de repositórios ao usuário
                    busca_repositorios_armazenados();
                    //seta valor de variável
                    escreve_arg_apaga_repositorio_armazenado(null);
                  }
              },
              error: function (data, string, string2) {
                console.log (data);
                console.log (string);
                console.log (string2);
                $('#feedback_text_erro').html(data);
                $('#loading').css('display', 'none');
                $('#check_erro').css('display', 'block');
                $("#check_erro").delay(1500).fadeOut(300);
                }
            });
          }
    }
}

//busca reposítorios e exibe oara o usuário
$(document).ready(function(){
  busca_repositorios_armazenados();
});
