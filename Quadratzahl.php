<?php



function quadratzahl ($n)
{
    $i = 0;
    $q = 0;
    while ($q < $n) {
        $i+=1;
        $q=$i*$i;}
    if ($q == $n)
    {echo $n." ist eine Quadratzahl";}
    else {echo $n." ist keine Quadratzahl";}
}


quadratzahl($_GET["n"])

?>