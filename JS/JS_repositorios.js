
function grava_repositorio(id, nome, linguagem, descricao, html_url, url, criado_em, forks){

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
            $('#feedback_text_ok').html(data);
            $('#loading').css('display', 'none');
            $('#check_ok').css('display', 'block');
            $("#check_ok").delay(1500).fadeOut(300);
        },
        error: function (data, string, string2) {
            console.log (data);
            console.log (string);
            console.log (string2);
            $('#loading').css('display', 'none');
            $('#check_erro').css('display', 'block');
            $("#check_erro").delay(1500).fadeOut(300);

        },
        complete: function (){
        }
    });
}

function detalhe_repositorio_armazenado(id){

}

function apaga_repositorio_armazenado(id){
  if(confirm("Deseja tirar este repositório do banco de dados?")){

  }
}
