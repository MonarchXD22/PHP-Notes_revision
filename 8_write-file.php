<?php
if(isset($_POST['filename'])){
$fileName="files/".$_POST['filename'];
$content=$_POST['content'];
$file= fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created";
}

// created a file using php at line1 we have filename,line2 its content, at l3 we got file variable that tells the anf fopen is used to open that file on php server and then we perform w write operation or if there is any problem die with a message and then use fwrite to make that file and then close it.

//now gonna get the data from html form to the file
?>

<form action="" method="post">
    <input type="text" placeholder="Enter file name" name="filename">
    <br></br>
    <textarea name="content" placeholder="Enter the Content" id=""></textarea>
    <br></br>
    <button>Create File</button>
</form>