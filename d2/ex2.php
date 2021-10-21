
<?php
function volume( $r)
{

    $PI = 3.14;

    $vol = (4 / 3) * $PI * $r * $r * $r;

    return $vol;
 
}
 

function surface_area( $r)
{

    $PI = 3.14;
    $sur_area = 4 * $PI * $r * $r;

    return $sur_area;
}
 

$radius = 24;

$vol; $sur_area;
 

$vol = volume($radius);

$sur_area = surface_area($radius);
 

echo ("Volume Of Sphere : " );

echo($vol);

echo( " \n Surface Area Of Sphere :");

echo( $sur_area);
 
