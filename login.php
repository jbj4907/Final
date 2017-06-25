<?php
include("config.php");

if (mysqli_connect_errno($conn))
    echo "DB 에러";
else{

    $id = $_POST['id']; //아이디를 받아옴
    $pw = $_POST['pw']; //패스워드를 받아옴
    $msg ='';

    $result = mysqli_query($conn, "select * from login where id = '$id' and pw = '$pw'");

    $msg = '!!'.mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['logged'] = 1;
        header("location:myhome.php");
    } else {
        $msg = "로그인에 실패했습니다.";
        header("location:signin.php?msg=$msg");
    }
}



?>