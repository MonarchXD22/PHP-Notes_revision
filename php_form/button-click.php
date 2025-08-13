<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call php function</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="btn1">Call Function</button>
    </form>
</body>
</html>

<?php 
//isset is used to check is we're getting any requests or not.
if(isset($_POST['btn'])){
    btn_click_test();
}

function btn_click_test() {
    echo "function called on button click";
}