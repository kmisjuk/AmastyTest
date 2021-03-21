<?php

class Queen extends AbstractChessmen
{
    public function move($x, $y)
    {
        if($x < 1 || $x > 8 ||  $y < 1 || $y > 8)
        {
            throw new Exception('координаты ферзя вышли за рамки доски');
        }
        elseif($x == $this->x && $y == $this->y)
        {
            throw new Exception('размещение ферзя не изменилось');
        }
        elseif(!($x == $this->x || $y == $this->y || abs($x - $this->x) == abs($y - $this->y)))
        {
            throw new Exception('перемещение ферзя в недопустимую область');
        }
        else
        {
            $this->x = $x;
            $this->y = $y;
        }
    }
}
?>