<?php
$users=["anil","peter","sam","bruce","tony"];

// to check if the given car is arr or not
echo is_array($users);
echo "<br>";
//count fxn
echo count($users);

//removing array from a position
echo "<br>";
unset($users[1]);
print_r($users);