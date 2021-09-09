<?php

echo PHP_VERSION;
echo "<br>";
echo 2**10;
echo "<br>";
$x= 10;
$y= 1;
echo $x<=>$y;

$t=1;
$g=1.0;

echo gettype($t);
echo "<br>";
echo gettype($g);
echo "<br>";echo "<br>";
if ($t == $g) {
    echo "równe";
}
else {
    echo "różne";
}
echo "<br>";echo "<br>";
if ($t === $g) {
    echo "identyczne";
}
else {
    echo "różne";
}

?>