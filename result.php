<?php
$mysqli = new mysqli('localhost', 'root', '', 'mybookdb') or die(mysqli_connect_error());
$result  = $mysqli->query("SELECT * FROM product") or die(mysqli_connect_error());
$row = $result->fetch_assoc()
?>






<?php ?>