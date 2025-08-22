<?php
include("./16_config.php");
$query=$conn->prepare("SELECT rollno, full_name FROM STUDENT");
$query->execute();
$studentData = $query->fetchAll();

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
    echo "<option value=".$student['rollno'].">".$student['full_name']."</option>";
}
?>