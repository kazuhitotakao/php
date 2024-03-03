<?php
function triangle($bottom1,$height1)
{
    $triangle_Area=($bottom1*$height1)/2;
    return $triangle_Area;
}

echo triangle(2,3);
echo "<br>";

function square($vertical, $beside)
{
    $square_Area = ($vertical * $beside);
    return $square_Area;
}
echo square(2, 3);
echo "<br>";

function trapezoid($top1,$bottom2,$height2)
{
    $trapezoid_Area = ($top1 + $bottom2)*$height2/2;
    return $trapezoid_Area;
}
echo trapezoid(2, 6,4);
echo "<br>";

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);