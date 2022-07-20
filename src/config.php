<?php
    require_once '../vendor/autoload.php';

    $server="localhost";
    $username="root";
    $password="";
    $database="lab4";
    // $conn= new PDO($server,$username,$password,$database);
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    if(!$conn){
        echo "<script> alert('Connection Failed!') </script>";
    }

    $fluent = new \Envms\FluentPDO\Query($conn);

?>
