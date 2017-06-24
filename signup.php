<!doctype html>
<html>
    <head>
        <title>Sign up for Smart Home</title>
        <meta charset="UTF-8">
        <link href="css/themify-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">

        <style>
            #box{

                width: 50%;
                margin-left: auto;
                margin-right: auto;
            }
            h1{
                text-align: left;
                background-color: #dadaff;
                color: #691490;
                font-family: 'Patrick Hand SC', cursive;

            }
            #heart {
                position: fixed;
                bottom: 10px;
                right: 10px;
                opacity: 0.5;
            }

            #heart:hover{
                opacity:1;
            }
        </style>
    </head>
    <body>
        <div id="box">
        <form action="join.php" method="post">
            <h1>Registration</h1>
            <h3 style="text-align: left">사용할 아이디와 비밀번호를 입력 후 버튼을 누르면 회원가입이 완료됩니다.</h3>
            <div>
                <span class="ti-user"></span>
                <input name="id" type="text" placeholder="ID">
            </div>

            <div>
                <span class="ti-lock"></span>
                <input name="pw" type="password" placeholder="Password">
            </div>

            <button style="margin-top: 5%"type="submit">Submit</button>
        </form>
            <?php if (!empty($_GET['msg'])) echo '<p style="color: red;">'.$_GET['msg'].'</p>' ?>
        </div>
        <div id="heart">
            <a href="index.php"><img src="img/home.png"></a>
        </div>
    </body>
</html>