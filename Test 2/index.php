<?php
$color = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
for($i = 0; $i < 5; $i++)
{
    for($j = 0; $j < 5; $j++)
    {
        $textID = rand(0, count($color) - 1);
        do {
            $colorID = rand(0, count($color) - 1);
        }
        while($textID == $colorID);
        echo '<span style="color: '.$color[$colorID].'">'.$color[$textID].' </span>';
    }
    echo '<br>';
}