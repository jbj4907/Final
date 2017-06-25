<?php

include("UltraFunction.php");
include("config.php");

session_start(); //Start the session

if($_SESSION['logged'] != 1){ //If session not registered
    header("location:login.php"); // Redirect to login.php page
}

?>

<!doctype html>
<html>
    <head>
        <title>My Home</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
        <link href="css/myhome.css" rel="stylesheet">
        <link href="css/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <p id="container">
            <h1 id="title">My Home</h1>
            <p><div class="card card-1">
            <div class="content">
                <span style="font-size: 30px; color: #003366">
                    <?php
                        $w = Weather::get_current_weather();
                        $icon = $w['icon'];
                        echo '<img src='.$icon.'>'.$w['desc'];
                    ?>
                </span><br>
                현재온도 : <?php echo $w['current_temp'] ?><br>
                최저기온 : <?php echo $w['temp_min'] ?><br>
                최고기온 : <?php echo $w['temp_max'] ?><br>
            </div>
        </div>
            <div class="card">
                <div class="content">
                    <span style="font-size: 25px">100엔<br>=<br>
                    <span style="font-size: 30px; color: #EA324E"><?php echo Currency::get_currency("JPY", "KRW") * 100; ?></span>원
                </div>
            </div></p>
            <p><div class="card">
            <div class="content">
                <span style="font-size: 30px; color: #003366">IT News</span>
                <span class="ti-bookmark-alt" style="font-size: 18px"></span><br>
                <span style="font-size: 18px"><?php echo News::show_news(); ?></span>
            </div>
        </div>
        <div class="card">
            <a href="javascript:;" onclick="document.getElementById('edit').style.display='block'"><img src="img/plus.png" id="img"></a>
        </div>
         <div id="signed">
            Hi, <?php echo $_SESSION['id']; ?>
        </div>
        <div id="heart">
            <img src="img/myhome.png">
        </div>

        <div id="edit" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container">
                <span onclick="document.getElementById('edit').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>어떤 위젯을 추가하시겠습니까?</h1>
                </div>
            <div class="w3-container">

                <form action="edit.php" method="post">
                    <div class="w3-row w3-section">
                        <label>widget</label>
                        <select name="widget_id">
                            <?php

                            $result = mysqli_query($conn, "select * from widget");

                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                echo "<option value=$id>$name</option>";
                            }
                            ?>
                        </select>
                    </div>
                <button class="w3-button w3-block w3-section w3-light-gray w3-hover-purple w3-ripple w3-padding w3-large" type="submit">등록하기</button>
                </form>
            </div>

            </div>
        </div>
    </div>
    </body>
</html>
