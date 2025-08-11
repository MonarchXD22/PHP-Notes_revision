<?php
$x = 20;
echo "before condition";
echo "<br/>";

if ($x == 20) {
    goto jump;
}

$name = "Ayush";
echo $name;
echo "<br/>";

jump:
echo "Jumped on line no15.";

?>