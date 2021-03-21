<?php
include "IChessmen.php";

abstract class AbstractChessmen implements IChessmen
{
    public $x;
    public $y;
    public function getPosition()
    {
        echo 'x = '.$this->x.', y = '.$this->y.'<br>';
    }
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
?>