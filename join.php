<?php
include("config.php");

if (mysqli_connect_errno($conn))
    echo "DB 에러";
else{

    $id = $_POST['id']; //아이디를 받아옴
    $pw = $_POST['pw']; //패스워드를 받아옴
    $msg ='';

    if (mysqli_query($conn, "INSERT INTO `login` (`id`, `pw`) VALUES ('$id', '$pw')")) {
        session_start();
        $_SESSION['id'] = $ck_id;
        $_SESSION['logged'] = 1;
        header("location:myhome.php");
    } else {
        $msg = "아이디 생성에 실패했습니다.";
        header("location:signup.php?msg=$msg");
    }
}

?>