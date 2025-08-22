<form action="" method="post">
    <input type="text" name="search" placeholder="Enter Name To Search">
    <br></br>
    <button>Search</button>
</form>

<?php
include('./16_config.php');
if(isset($_POST['search'])){
    $search = $_POST['search'];
    // $student=$conn->prepare("SELECT * FROM student WHERE full_name='$search'");
    $student=$conn->prepare("SELECT * FROM student WHERE full_name like '%$search%'");//can be used to search per letter
    $student->execute();
    $result=$student->fetchAll();
    echo "<table border='1'>";
echo "<tr>
<th>Full Name</th>
<th>Marks</th>
<th>City</th>
<th>Age</th>
</tr>";
foreach($result as $student){
    echo "<tr>
    <td>" . $student['full_name'] . "</td>
    <td>" . $student['marks'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['stu_age'] . "</td>
    </tr>";
}
echo "<table>";
}
?>
