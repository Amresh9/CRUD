<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybookdb') or die(mysqli_connect_error());


if ($_GET['id'] == '') {
    echo "empty id";
    header('location:index.php');
} else {
    $id = $_GET['id'];

    $mysqli->query("Delete  from product where id = $id") or die($mysqli->error);

    header('location:index.php');
}


    //  $mysqli->prepare("INSERT INTO product(id,book_name,price) VALUES('$id','$bname','$price')") or die($mysqli->error);
    // $$mysqli->close();
