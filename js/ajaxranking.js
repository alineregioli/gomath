jQuery(document).ready(function($){
	var dados = $("#user").val();
    var page = parseInt($("#page").val());
    var limit = parseInt($("#limit").val());
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'control/ajaxRanking.php',
        async: true,
        data: {'id': dados, 'limit': limit , 'page' : page},
        success: function(response) {
            console.log(response);
            var n = response.length;
            $("#user").after('<input type="hidden" id="total" name="total" value="'+response[n-1]+'">');
            var total = parseInt($("#total").val());
            if(page == total/limit){
                $("#next").addClass("disabled");
            }
            for (var i = 0; i < n-1; i++) {
                $("#ranking").append("<tr class='clickable-row' id="+i+">");
                $("#"+i).append("<td>"+(i+1)+"</td>");
                $("#"+i).append("<td>"+response[i].nome+"</td>");
                $("#"+i).append("<td>"+response[i].resolvidos+"</td>");
               
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
        url: 'control/ajaxRanking.php',
        async: true,
        data: {'id': dados, 'page':page , 'limit':limit},
        success: function(response) {
            $("#ranking").empty();
            var n = response.length;
            for (var i = 0; i < n-1; i++) {
                $("#ranking").append("<tr class='clickable-row' id="+i+">");
                $("#"+i).append("<td>"+((page-1)*limit+i+1)+"</td>");
                $("#"+i).append("<td>"+response[i].nome+"</td>");
                $("#"+i).append("<td>"+response[i].resolvidos+"</td>");
               
            }
        },
        error: function(response){
            console.log(response);
        }
     });
    }
});

