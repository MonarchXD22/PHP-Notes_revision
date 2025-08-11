<?php
//using POST request
//so it is used to send data to server to create or modify something
//NOTE: WHILE IN SIGNIN GET IS USED TO SEND DATA TO THE SERVER THAT IS NOT RECOMMENDED AND IS USED TO GET/RETRIVE DATA FROM THE SERVER
//use if to dodge error when you remove the username and password form the address
if($_POST){
    echo "User Name is " .$_POST['user_name'] ."<br/>";
    echo "User Email is " .$_POST['user_email'] ."<br/>";
    echo "Password is " .$_POST['user_pass'];
}
