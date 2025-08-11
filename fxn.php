<?php 

function test(){
    echo "This is a function";
}

test();

//varaible function stroing fxn in a variable
echo "<br/>";
function test2(){
    echo "this is for variable fxn";
}

$a = "test2";

$a();
echo "<br/>";
//another way
echo $a();

echo "<br/>";

//callback fxns

function test3($b){
    echo"that is a callback fxn below<br/>";
    $b();
}

test3($a);

//inbuilt fxns

//for length
echo "<br/>";
$str1 = "Ayush Rana";

echo strlen($str1);

//to know data type
echo "<br/>";
var_dump($str1);

//to check date time
echo "<br/>";
echo date("l");

//php info
echo "<br/>";
// echo phpinfo();

//is string fxn
echo is_string($str1);