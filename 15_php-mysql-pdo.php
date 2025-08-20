<!-- Using pdo php data object -->
<?php
$host="localhost";
$username="root";
$password="root";

try {
    $conn = new pdo("mysql:host=$host;dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conection eshtablished";
} catch(PDOException $err){
    echo "Connection Failed $err->getmessage()";
}
echo "<br>";
$result= $conn->query("Show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}
?>