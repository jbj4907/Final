<!doctype html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
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
                background-color: #def2db;
                font-family: 'Patrick Hand SC', cursive;

                
            }

            #heart{
                position: fixed;
                bottom: 10px;
                right: 10px;
                opacity: 0.5;
            }
            #heart:hover{
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <div id="box">
            <form action="login.php" method="post">
                <h1>Login</h1>
                <div>
                    <span class="ti-user"></span>
                    <input name="id" type="text" placeholder="ID">
                </div>
                <div>
                    <span class="ti-lock"></span>
                    <input name="pw" type="password" placeholder="Password">
                </div>

                <button type="submit">Login</button>
            </form>
            <?php if (!empty($_GET['msg'])) echo '<p style="color: red;">'.$_GET['msg'].'</p>' ?>
        </div>

        <div id="heart">
            <a href="index.php"><img src="img/home.png"></a>
        </div>
    </body>
</html>