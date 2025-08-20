<!-- Normal Connection -->
<?php
$host="localhost";
$username="root";
$password="root";
$database="college";

$conn = new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die ("Connection Failed: " . $conn->$connect_error);
}

echo "Connection Success";
echo "<br>";
$result=$conn->query("show tables")->fetch_all();
print_r($result);
?>