<?php
include 'config.php';

extract($_POST);

$query = "INSERT INTO `user-data` (`Name`, `Email`, `Phone`) VALUES ('$name', '$email', '$phone')";
$result = mysqli_query($connection,$query);


?>