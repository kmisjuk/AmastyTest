$(document).ready(function () {
    $("button").on("click", function(){
        $.ajax({
            url: "handler.php",
            method: "post",
            data: {
                nominal: $("#nominal").val(),
                summa: $("#summa").val()
            },
            success: function(data){
                data = JSON.parse(data);
                if(data.status === "success") {
                    var content = "<tr><td width='50%'>Номинал</td><td>Количество</td></tr>";
                    $.each(data.result, function(index, value) {
                        content += "<tr><td>" + index + "</td><td>" + value + "</td></tr>";
                    });
                    $("table").html(content);
                    $("#answer").css("display", "block");
                }
                else if(data.status === "error") {
                    $("table").html("<tr><td>Неверная сумма. Выберите " + data.result.min + " или " + data.result.max + ".</td></tr>");
                    $("#answer").css("display", "block");
                }
                else if(data.status === "null") {
                    $("table").html("<tr><td>Ошибка. Заполните поля по примеру</td></tr>");
                    $("#answer").css("display", "block");
                }

            }
        });
    });
});