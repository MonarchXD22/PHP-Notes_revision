<?php
//using GET request
//use if to dodge error when you remove the username and password form the address
if($_GET){
    echo "User Name is " .$_GET['user_name'] ."<br/>";
    echo "Password is " .$_GET['user_pass'];
}
