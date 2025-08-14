<?php
// $file="files/test1.txt";
// $myFile= fopen($file,"r") or die("Unabe to read file");// r used to read.
// echo fread($myFile,filesize($file));
// fclose($myFile);
if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myFile= fopen($file,"r") or die("Unabe to read file");
    echo fread($myFile,filesize($file));
    fclose($myFile);
}
//this is for this folder but what if the data is on your device the you can just upload it to the form and get it read.
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br></br>
    <button>Read File</button>
</form>