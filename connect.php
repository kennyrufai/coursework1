<?
$servername = "localhost";
$username = "2113332";
$password = "2113332";
$dbname='db2113332_cmm007';

// Create connection
$db = new mysqli($servername,$username,$password,$dbname);
//$db = mysqli_connect($servername,$username,$password,$dbname);

if(!$db){
    echo "hiiiiiiiiiiiii";
}else{
    echo "haaaaaaaaaaaaaaaaaaaaaaaaiiiiiiiiiiiii";
}
?>
