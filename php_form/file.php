<?php
//used in many things like uploading files and editing them and other things but we will be using it only to upload right now.
// print_r($_FILES);
if($_FILES['fileupload']){
    $path = $_FILES['fileupload']['name'];
    $upload_path = "./uploads/".$path;
    echo $upload_path;
    move_uploaded_file( $_FILES['fileupload']['tmp_name'], $upload_path) || die("failed to upload");
    //used to upload file to a specified folder
    //done >_<
}else {
    die("no file found");
}