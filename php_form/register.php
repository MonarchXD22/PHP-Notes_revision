<?php
// when in loop or handling large sums of requests you can use $_request for eg
$_REQUEST['dummy']="test";//adding data forcefully
foreach($_REQUEST as $key=>$data){
    echo $key ." is ".$data;
    echo "<br>";
}