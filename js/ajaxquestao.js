jQuery(document).ready(function($){
	var dados = $("#idquestao").val();
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/questao.php',
        async: true,
        data: {'id': dados},
        success: function(response) {
        	n = response.alternativas.length
            $("#titulo").append(response.questao.id+" - "+response.questao.nome);
            $("#nivel").append("Nivel "+response.questao.nivel);
            $(".enunciado").append(response.questao.descricao);
            $(".assunto p").append(response.questao.assunto);
        	for (var i = 0; i < n; i++) {
                console.log(i);
        		if(i == 0){
                    $(".alternativas").append("<div class='custom-control custom-radio' id="+i+">");
                    $("#"+i).append("<input type=\"radio\" name=\"alternativa\" class=\"custom-control-input\" checked value="+response.alternativas[i].id+">");
                    $("#"+i).append("<label class=\"custom-control-label\">"+response.alternativas[i].texto);
                }
                else{
                    $(".alternativas").append("<div class='custom-control custom-radio' id="+i+">");
                    $("#"+i).append("<input type=\"radio\" name=\"alternativa\" class=\"custom-control-input\" value="+response.alternativas[i].id+">");
                    $("#"+i).append("<label class=\"custom-control-label\">"+response.alternativas[i].texto);
                }
			}
			
            console.log(response);
        }
     });
});

