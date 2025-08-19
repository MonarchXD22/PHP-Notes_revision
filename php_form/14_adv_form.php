<?php
if(isset($_POST)){
    echo "user name is " . $_POST['name'];
    echo "<br>";
    echo "user email is " . $_POST['email'];
    echo "<br>";
    echo "User Skills are " . implode(", ",$_POST['skills']); //implode is used to convert array to string and vice versa for explode.
    echo "<br>";
    echo "user gender is " . $_POST['gender'];
    echo "<br>";
    echo "user city is " . $_POST['city'];
    echo "<br>";
    echo "user bio is " . $_POST['bio'];
    echo "<br>";
}