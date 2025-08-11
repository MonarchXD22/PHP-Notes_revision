<?php

//like dictionary or map consists key pairs

$userDetails = ["Name" => "Ayush Rana", "Age" => "20", "City" => "snr"];
echo $userDetails["Name"];
echo "<br/>";

//use of foreach

foreach( $userDetails as $key => $value ) {
    echo "$value<br/>";
}