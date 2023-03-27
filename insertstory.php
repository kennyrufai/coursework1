<?php

include("hi.php");



$id = $_POST["id"];
$Title = $_POST["title"];
$content = $_POST["content"];
$image = $_POST["image"];
$location = $_POST["location"];
$date = date("Y/m/d");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }*/

//echo $firstname.":".$lastname.":".$superpower;

$sql = "INSERT INTO africa1 (Title, content,a,b,c) VALUES ( '$Title', '$content', '$image', '$location', '$date')";


if(mysqli_query($db, $sql)){

    echo"ok";

}else {echo "error".$sql."<br>".mysqli_error($db);}

echo"yes";

header("location:hi.php");

?>