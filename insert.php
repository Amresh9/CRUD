<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybookdb') or die(mysqli_connect_error());

if (isset($_POST['save'])) {
    if ($_POST['id'] == '' &&  $_POST['bname'] == '' && $_POST['price'] == '') {

        header('Location:index.php');
    } else {
        $id = $_POST['id'];
        $bname = $_POST['bname'];
        $price = $_POST['price'];
        $mysqli->query("INSERT INTO product(id,book_name,price) VALUES('$id','$bname','$price')") or die($mysqli->error);
    }


    //  $mysqli->prepare("INSERT INTO product(id,book_name,price) VALUES('$id','$bname','$price')") or die($mysqli->error);
    // $$mysqli->close();
}
