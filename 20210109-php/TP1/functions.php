<?php

function maFunction(){

    echo "bonjour";
    echo "<br>";
}
maFunction();


function addition($a, $b)
{
    $c=maFunction();
    return $a+$b . $c;
}

echo 10 + addition(5,6);
$ad1= addition(5,6);
$ad2= addition(20,30);

echo$ad1;
echo "<br>";
echo $ad2;

//echo addition(5,6);

