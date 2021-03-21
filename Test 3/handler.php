<?php
if($_POST["nominal"] == "" || $_POST["summa"] == "" || !preg_match("/^((\d)|(\d\,\s?\d))+$/", $_POST["nominal"]))
{
    echo json_encode(
        array(
            "status" => "null"
        )
    );
}
else
{
    define("_DEFAULT", 2147483647);
    $nominal = explode(",", str_replace(" ", "", $_POST["nominal"]));
    $summa = $_POST["summa"];
    $nominalCount = count($nominal);
    $noteCount = array_fill(0, $summa + 1, _DEFAULT);
    $noteCount[0] = 0;
    for ($i = 1; $i <= $summa; $i++)
    {
        for ($j = 0; $j < $nominalCount; $j++)
        {
            if ($i >= $nominal[$j] && $noteCount[$i - $nominal[$j]] + 1 < $noteCount[$i])
            {
                $noteCount[$i] = $noteCount[$i - $nominal[$j]] + 1;
            }
        }
    }
    if ($noteCount[$summa] == _DEFAULT)
    {
        $index = $summa - 1;
        while ($noteCount[$index] == _DEFAULT)
        {
            $index--;
        }
        echo json_encode(
            array(
                "status" => "error",
                "result" => array(
                    "min" => $index,
                    "max" => $index + min($nominal)
                )
            )
        );
    }
    else
    {
        $result = array_fill_keys($nominal, 0);
        while ($summa > 0)
        {
            for ($i = 0; $i < $nominalCount; $i++)
            {
                if ($noteCount[$summa - $nominal[$i]] == $noteCount[$summa] - 1)
                {
                    $result[$nominal[$i]]++;
                    $summa -= $nominal[$i];
                    break;
                }
            }
        }
        echo json_encode(
            array(
                "status" => "success",
                "result" => $result
            )
        );
    }
}