<!-- getting a list of files in an array and then getting the link of each file through loop -->
<?php
$path="files";
$items=scandir($path);
$items= array_diff($items,array(".",".."));
foreach($items as $item){
    echo "<a href= ./files/$item>$item</a>";
    echo"<br>";
}