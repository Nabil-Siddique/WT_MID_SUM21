<?php
$length = 5;
$width = 2;
if($length==$width) echo "This shape is a square.";
else
{
    $area = $length * $width;
    echo "Area is: ".$area;
    $perimeter = 2 * ($length + $width);
    echo "<br>Perimeter is: ".$perimeter;
}
?>