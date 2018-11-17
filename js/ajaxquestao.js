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
            x = 300000*parseInt(response.questao.nivel)
            setInterval(function(){
                if(x <= 0){
                    $(".alternativas").submit() 
                }
                $("#time").empty();
                var ms = 1000*Math.round(x/1000); // round to nearest second
                var d = new Date(ms);
                $("#time").append(d.getUTCMinutes() + ':' + d.getUTCSeconds());
                x -= 1000
            }, 1000);
            $(".enunciado").append(response.questao.descricao);
            $(".assunto p").append(response.questao.assunto);
        	for (var i = n-1; i >= 0; i--) {
        		if(i == 0){
                    $(".alternativas").prepend(response.alternativas[i].texto+"<br>");
                    $(".alternativas").prepend("<input type=\"radio\" name=\"alternativa\" checked value="+response.alternativas[i].id+"> ");
                    
                }
                else{
                    $(".alternativas").prepend(response.alternativas[i].texto+"<br>");
                    $(".alternativas").prepend("<input type=\"radio\" name=\"alternativa\"  value="+response.alternativas[i].id+"> ");
                   
                }
			}
			
            console.log(response);
        },
        error: function(response){
            console.log(response);
        }
     });
});

