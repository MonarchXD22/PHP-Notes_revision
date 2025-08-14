<!-- json is javascript object notation formate and is used to send data b/w server and client side. -->
<?php
// $user=["name"=>"anil","age"=>30,"email"=>"anile@abc.com"];
// $userJson=json_encode($user);
// echo $userJson;

// converting from json to array

$data='{"name":"anil","age":30,"email":"anile@abc.com"}';
$dataArray=json_decode($data,true);//if true is not used it will return as classobject.
print_r($dataArray);