<?php

class King extends AbstractChessmen
{
    public function move($x, $y)
    {
        if($x < 1 || $x > 8 ||  $y < 1 || $y > 8)
        {
            throw new Exception('координаты короля вышли за рамки доски');
        }
        elseif($x == $this->x && $y == $this->y)
        {
            throw new Exception('размещение короля не изменилось');
        }
        elseif($x < $this->x - 1 || $x > $this->x + 1 || $y < $this->y - 1 || $y > $this->y + 1)
        {
            throw new Exception('перемещение короля в недопустимую область');
        }
        else
        {
            $this->x = $x;
            $this->y = $y;
        }
    }
}
?>