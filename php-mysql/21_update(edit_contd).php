<?php
include("./16_config.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getStudent=$conn->prepare("SELECT * FROM student WHERE rollno='$id'");
    $getStudent->execute();
    $student= $getStudent->fetchAll();
    $name=$student[0]['full_name'];
    $marks=$student[0]['marks'];
    $city=$student[0]['city'];
    $age=$student[0]['stu_age'];
}
?>
<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name" />
    <br></br>
    <input type="text" value="<?php echo $marks ?>" name="marks" />
    <br></br>
    <input type="text" value="<?php echo $city ?>" name="city" />
    <br></br>
    <input type="text" value="<?php echo $age ?>" name="age" />
    <br></br>
    <button value="<?php echo $id; ?>" name="update">Update Student Data</button>
</form>

<?php

if(isset($_POST['update'])){
    $id = $_POST['update'];
    $name=$_POST['name'];
    $marks=$_POST['marks'];
    $city=$_POST['city'];
    $age=$_POST['age'];
    $updateStudent=$conn->prepare(" UPDATE student SET
    full_name='$name',
    marks='$marks',
    city='$city',
    stu_age='$age'
    WHERE rollno='$id'");
    if($updateStudent->execute()){
        header('location:20_delete_edit_table.php');
    }else{
        echo "Update Failed.";
    }
}

?>