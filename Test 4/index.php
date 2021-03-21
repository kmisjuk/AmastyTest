<form action="index.php" method="post">
    <label for="club">Введите название футбольного клуба Серии А:</label>
    <input type="text" id="club" name="CLUB" />
    <input type="submit" value="Отправить" />
</form>
<?php
if(isset($_POST["CLUB"]))
{
    include "simple_html_dom.php";
    $firstYear = 2019;
    $secondYear = 20;
    $season = "$firstYear-$secondYear";
    echo "<table style='text-align: center'><tr><th>Сезон</th><th>Место</th></tr>";
    while ($html = file_get_html("https://terrikon.com/football/italy/championship/$season/table"))
    {
        foreach ($html->find('table[class=colored big] tr a') as $element)
        {
            if ($element->plaintext == $_POST["CLUB"])
            {
                echo '<tr><td>'.$season.'</td><td>'.substr($element->parent()->parent()->first_child()->plaintext, 0, -1).'</td></tr>';
            }
        }
        $firstYear--;
        $secondYear--;
        $season = $firstYear.'-'.($secondYear < 10 ? '0'.$secondYear : $secondYear);
    }
    echo '</table>';
}?>