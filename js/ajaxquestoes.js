jQuery(document).ready(function($){
	var dados = $("#page").val();
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/questoes.php',
        async: true,
        data: {'page': dados},
        success: function(response) {
        	n = response.length
        	for (var i = 0; i < n-1; i++) {
        		$("#problemas").append("<tr class='clickable-row' onclick=' window.location = $(this).data(\"href\");' data-href='ver-questao?id="+response[i].id+"' id="+i+">");
        		$("#"+i).append("<td>"+response[i].id+"</td>");
        		//$("#"+i).append("<td>v</td>");
        		$("#"+i).append("<td>"+response[i].nome+"</td>");
        		//$("#"+i).append("<td>"+response[i].assunto+"</td>");
        		$("#"+i).append("<td>0</td>");
        		$("#"+i).append("<td>"+response[i].nivel+"</td>");
			}
			if(dados == response[n-1]-1){
				$("#next").addClass('disabled');
			}
        	//$("#problemas").append()
        	$('.clickable-row').css( 'cursor', 'pointer' );
        },
        error: function(response){
            console.log(response);
        }
     });
	$(".clickable-row").click(function() {
    	console.log("hi");
        window.location = $(this).data("href");
    });
});

