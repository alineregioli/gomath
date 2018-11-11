jQuery(document).ready(function($){
	var dados = $("#user").val();
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/ajaxDadosPerfil.php',
        async: true,
        data: {'id': dados},
        success: function(response) {
            $("#ten").after(" "+response[0].tentados);
            $("#res").after(" "+response[1].resolvidos);
            console.log(response[0].tentados);
        },
        error: function(response){
            console.log(response);
        }
     });
});

