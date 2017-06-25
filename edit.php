<?php

include("config.php");

session_start(); //Start the session

if($_SESSION['logged'] != 1){ //If session not registered
    header("location:login.php"); // Redirect to login.php page
}

$user = $_SESSION['id'];
$widget = $_POST['widget_id'];

$result = mysqli_query($conn, "INSERT INTO `apply_widget` (`id`, `user`, `widget_id`) VALUES (NULL, '$user', '$widget')");


?>