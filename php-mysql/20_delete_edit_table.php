<?php
include('./16_config.php');
// $student= $conn->prepare("DELETE FROM student where rollno=101"); //static delete
// echo $student->execute();
$student= $conn->prepare("select * from student");
$student->execute();
$result= $student->fetchAll();

echo "<table border='1' >";
foreach($result as $students){
    echo "<tr>
    <td>". $students['rollno']."</td>
    <td>". $students['full_name']."</td>
    <td>". $students['marks']."</td>
    <td>". $students['city']."</td>
    <td>". $students['stu_age']."</td>
    <td><form method='post'>
    <button name=delete value=".$students['rollno'].">Delete</button>
    </form></td>
    <td><a href=21_update(edit_contd).php?id=".$students['rollno'].">Edit</a></td>
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $student= $conn->prepare("DELETE FROM student WHERE rollno=$id");
    if($student->execute()){
        echo "record deleted";
    } else{
        echo "record not deleted";
    }
}

?>