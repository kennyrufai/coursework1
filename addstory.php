<?php

if(isset($_POST['submit'])){
    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["text_file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
}
?>  