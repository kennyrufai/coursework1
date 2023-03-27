<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>travel blog</title>

</head>
<body>
<header>
    <h1>Tourism Stories</h1>
    <h2>Stories</h2>
</header>
<p>what to do?</p>

<ul>
    <li><a href="addstory.html">insert story</a></li>
    <li><a href="viewstory.php ">show Stories</a></li>
    
    <ul>

        <?php

        include("hi.php");



        $sql = "SELECT * FROM africa";
        $result = $db->query($sql);

        while($row = $result->fetch_array()){
           //echo " <li><a href='displayBattles.php?{id}'>display  battle</a></li>";
            $Title=$row['Title'];
          //echo $row['superheroID'];
        $content=$row['content'];
            $id=$row['id'];
            echo "<li> <a href='viewstory.php?id={$id}'>Battles for {$Title} {$content}</a></li>";
        }


?>
    </ul>
</ul>
</body>
</html>