<?php

include("config.php");

session_start(); //Start the session

if($_SESSION['logged'] != 1){ //If session not registered
    header("location:login.php"); // Redirect to login.php page
}

$user = $_SESSION['id'];
$widget = $_POST['widget_id'];

$result = mysqli_query($conn, "INSERT INTO `apply_widget` (`id`, `user`, `widget_id`) VALUES (NULL, '$user', '$widget')");

if ($result) header("location:myhome.php");
else {
    $msg = "등록에 실패했습니다. 관리자에게 문의하세요.";
    header("location:myhome.php?msg=$msg");
}

?>