<?php
class Point {
    public $x;
    public $y;
    public $z;

    function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

function Distance($PointOne, $PointTwo) {
    return sqrt(pow($PointTwo->x - $PointOne->x, 2) + pow($PointTwo->y - $PointOne->y, 2) + pow($PointTwo->z - $PointOne->z, 2));
}

$PointOne = new Point(5, 9, 7);
$PointTwo = new Point(1, 5, 9);

echo Distance();