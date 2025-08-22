<form action="" method="post">
    <input type="text" placeholder="Enter Name" name="name">
    <br></br>
    <input type="text" placeholder="Enter Marks" name="marks">
    <br></br>
    <input type="text" placeholder="Enter City" name="city">
    <br></br>
    <input type="text" placeholder="Enter Student Age" name="age">
    <br></br>
    <button>Add New Student</button>
</form>

<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $marks=$_POST['marks'];
    $city=$_POST['city'];
    $age=$_POST['age'];
    include("./16_config.php");
    $query=$conn->prepare("
    INSERT INTO student (rollno, full_name, marks, city, stu_age)
    VALUES (NULL, '$name',$marks,'$city',$age)
    ");
    $result = $query->execute();
    if($result){
        echo "Data Inserted";
    } else{
        echo "error Occured";
    }
}
?>