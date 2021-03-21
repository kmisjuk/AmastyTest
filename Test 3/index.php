<?php header('Content-Type: text/html; charset=utf-8');?>
<html lang="ru">
    <head>
        <title>Банкомат</title>
        <link href="css/style.css?<?=time()?>" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <h1>Банкомат</h1>
            <label for="nominal">Номинал в наличии:</label><br>
            <input type="text" id="nominal" placeholder="5, 10,..." /><br>
            <label for="summa">Ваша сумма:</label><br>
            <input type="number" min="1" id="summa" placeholder="5000" /><br>
            <button>Отправить</button>
            <div id="answer">
                Ответ:
                <table>
                </table>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js?<?=time()?>"></script>
</html>