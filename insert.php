<?php

require 'connection.php';
$app = [];
$app['db'] = (new Database())->db;

if(isset($_POST["name"]) && isset($_FILES["doc"])) {
    $username = $_POST["name"];
    $image = $_FILES["doc"];
    $filepath = "uploaded/" . $image["name"];
    move_uploaded_file($image["tmp_name"], "$filepath");

    if ($username !== "" && $image !== "") {
        $insert = $app['db']->query("INSERT INTO files(user,file) VALUES('$username', '$filepath')");
    }

    $fetch = $app['db']->prepare("SELECT * FROM files");
    $fetch->execute();
    $totalData = $fetch->fetchAll();
}
else{
    header('location: err.php');
}
require 'index.php';