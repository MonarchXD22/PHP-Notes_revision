<?php
include("16_config.php");
$getStudents=$conn->prepare("SELECT * FROM student");
$getStudents->execute();
$students=$getStudents->fetchAll();
echo "<table border='1'>";
echo "<tr>
<th>Full Name</th>
<th>Marks</th>
<th>City</th>
<th>Age</th>
</tr>";
foreach($students as $student){
    echo "<tr>
    <td>" . $student['full_name'] . "</td>
    <td>" . $student['marks'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['stu_age'] . "</td>
    </tr>";
}
echo "<table>";
?>