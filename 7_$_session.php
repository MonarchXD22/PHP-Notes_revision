<!-- session is used to store data in the server side its the same as cookies but it is more secure and used to store sensitive information and the cookie data is used to store ifo on browser both retians data on reloads but session storage can hold more data in comparison to cookie -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter The Username">
        <br></br>
        <button name="button" value="set">Set Session</button>
        <br></br>
        <button name="button" value="get">Get Session</button>
        <br></br>
        <button name="button" value="delete">Delete Session</button>
    </form>
</body>
</html>

<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }
    if($_POST['button']=="get"){
        echo $_SESSION['user'];
    }
    if($_POST['button']=="delete"){
        session_destroy();
    }
}