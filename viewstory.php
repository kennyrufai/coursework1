<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>superhero system</title>

</head>
<body>
<header>
    <h1>Travel Stories</h1>
    <h2>All Stories </h2>
</header>
<main>
    <?php

    include("hi.php");

if(isset($_GET["id"])){
    $sid = $_GET["id"];
    $sql_query = "select * from africa where sid = $sid ";


    //$sql = "SELECT * FROM africa";
    $result = $db->query($sql);

    while($row = $result->fetch_array()){

        $Title=$row['Title'];
        $content=$row['content'];
        $imageFileType=$row['image'];
        $location=$row['location'];
        $date=$row['date'];

        echo "<article> 
             <h3>{$Title} {$content} {$imageFileType} {$location} {$date}</h3>
             
            </article>";
    }}
    ?>

</main>
</body>
</html>