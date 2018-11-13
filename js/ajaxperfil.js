jQuery(document).ready(function($){
	var dados = $("#user").val();
    var page = parseInt($("#page").val());
    var limit = parseInt($("#limit").val());
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/ajaxDadosPerfil.php',
        async: true,
        data: {'id': dados, 'limit': limit , 'page' : page},
        success: function(response) {
            console.log(response);
            $("#ten").after(" "+response[0].tentados);
            $("#res").after(" "+response[1].resolvidos);
            $("#pos").after(" "+response[4]+"º");
            $("#pon").after(" "+response[5]);
            $("#user").after('<input type="hidden" id="total" name="total" value="'+response[3]+'">');
            var total = parseInt($("#total").val());
            if(page == total/limit){
                $("#next").addClass("disabled");
            }
            var n = response[2].length;
            for (var i = 0; i < n; i++) {
                $("#submissoes").append("<tr class='clickable-row' id="+i+">");
                $("#"+i).append("<td>"+response[2][i].id+"</td>");
                $("#"+i).append("<td>"+response[2][i].data+"</td>");
                $("#"+i).append("<td>"+response[2][i].nome+"</td>");
                var res = "<span style='color:red'>Wrong Answer<span>";
                if(response[2][i].veredito == 1){
                    res = "<span style='color:green'>Accepted<span>";
                }
                $("#"+i).append("<td><b>"+res+"</b></td>");
            }
        },
        error: function(response){
            console.log(response);
        }
     });
    $("#next").click(function() {
        var page = parseInt($("#page").val());
        var limit = parseInt($("#limit").val());
        var total = parseInt($("#total").val());
        console.log(typeof(total/limit))
        if(page != total/limit){
            page = page+1;
            $("#page").val(page);
             $("#prev").removeClass("disabled");
            if(page == total/limit){
                $("#next").addClass("disabled");
            }
            problems(page);
        }
    });

    $("#prev").click(function() {
        var page = parseInt($("#page").val());
        var limit = parseInt($("#limit").val());
        var total = parseInt($("#total").val());
        console.log(typeof(total/limit))
        if(page != 1){
            page = page-1;
            $("#page").val(page);
             $("#next").removeClass("disabled");
            if(page == 1){
                $("#prev").addClass("disabled");
            }
            problems(page);
        }
    });

    function problems(page){
        $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/ajaxSubmissoes.php',
        async: true,
        data: {'id': dados, 'page':page , 'limit':limit},
        success: function(response) {
            console.log(response);
            $("#submissoes").empty();
            var n = response[0].length;
            for (var i = 0; i < n; i++) {
                $("#submissoes").append("<tr class='clickable-row' id="+i+">");
                $("#"+i).append("<td>"+response[0][i].id+"</td>");
                $("#"+i).append("<td>"+response[0][i].data+"</td>");
                $("#"+i).append("<td>"+response[0][i].nome+"</td>");
                var res = "<span style='color:red'>Wrong Answer<span>";
                if(response[0][i].veredito == 1){
                    res = "<span style='color:green'>Accepted<span>";
                }
                $("#"+i).append("<td><b>"+res+"</b></td>");
            }
        },
        error: function(response){
            console.log(response);
        }
     });
    }
});

