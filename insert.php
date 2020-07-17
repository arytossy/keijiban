<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=arimitsu; host=localhost;", "root", "");

$pdo -> exec("
    insert into 4each_keijiban values(
        '".$_POST['handlename']."',
        '".$_POST['title']."',
        '".$_POST['comments']."'
    );
");

header("Location:http://localhost/4each_keijiban/index.php");

?>