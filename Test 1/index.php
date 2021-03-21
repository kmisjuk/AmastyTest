<?php
header('Content-Type: text/html; charset=utf-8');

include "AbstractChessmen.php";
include "King.php";
include "Queen.php";

$king = new King(4, 3);
try
{
    $king->move(2, 2);
}
catch (Exception $e)
{
    echo 'Ошибка: '.$e->getMessage().'<br>';
}
$king->getPosition();

$queen = new Queen(1, 1);
try
{
    $queen->move(7, 3);
}
catch (Exception $e)
{
    echo 'Ошибка: '.$e->getMessage().'<br>';
}
$queen->getPosition();
?>