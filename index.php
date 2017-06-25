<!doctype html>
<html>
<head>
    <title>Smart Home</title>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href='css/dosis-font.css' rel='stylesheet' type='text/css'>
</head>
<body>
<nav class="side-menu">
    <ul>
        <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
        </li>
        <li>
            <a href="#home" class="page-scroll">
                <span class="menu-title">Home</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#why" class="page-scroll">
                <span class="menu-title">Why Smart Home</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#how" class="page-scroll">
                <span class="menu-title">How to</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#developers" class="page-scroll">
                <span class="menu-title">Developers</span>
                <span class="dot"></span>
            </a>
        </li>
    </ul>
</nav>
<!--home-->
<div class="container-fluid">
    <div class="row hero-header" id="home">
        <div class="col-md-7">
            <img src="img/logo.png" class="logo">
            <h1>Make your own Home</h1>
            <h3>Just choose what you Want</h3>
            <a href="signup.php" class="btn btn-lg btn-red">Sign Up Now<span class="ti-arrow-right"></span></a>
            <a href="signin.php" class="btn btn-lg btn-red">Login<span class="ti-arrow-right"></span></a>
        </div>

        <div class="col-md-5 hidden-xs">
            <img src="img/home.png" class="rocket animated bounce">
        </div>
    </div>
</div>
<!--why-->
<div class="container">
    <div class="row me-row content-ct" id="why">
        <h2 class="row-title">Why this Website is Cooool?</h2>
        <div class="col-md-4 feature">
            <span class="ti-user"></span>
            <h3>We make you Special</h3>
            <p>User chooses widgets! User sets widgets' locations!</p>
        </div>
        <div class="col-md-4 feature">
            <span class="ti-face-smile"></span>
            <h3>Convenient</h3>
            <p>You can see your chosen widgets in One Page. It saves time to search them all!</p>
        </div>
        <div class="col-md-4 feature">
            <span class="ti-eraser"></span>
            <h3>You can Edit Whenever you Want</h3>
            <p>Don't worry about if you want to change your home. You can edit and put more widgets on it!</p>
        </div>
    </div>
</div>
<!--기능 설명 칸-->
<div class="container-fluid hows" id="how">
    <div class="row me-row content-ct">
        <h2 class="row-title">How to use it</h2>
        <div class="col-md-4 col-sm-6">
            <p><img src="img/how.png" style="margin-left: 60%;"></p>
        </div>
    </div>
</div>


<!--About developers-->
<div class="container">
    <div class="row me-row schedule" id="schedule">
        <h2 class="row-title content-ct">Developers</h2>
        <div class="col-md-12">
            <div class="tab-content">
                <div role="tabpane1" class="tab-pane fade in active" id="developers">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="img/byeokjin.jpg">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"> Jung Byeokjin</h4>
                                    <h5>대진대학교 컴퓨터 소프트웨어 융합전공</h5>
                                    <p>20161281 정벽진</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="img/subin.jpg">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">An Subin</h4>
                                    <h5>대진대학교 컴퓨터 소프트웨어 융합전공</h5>
                                    <p>20161317 안수빈</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--footer-->
    <div class="container-fluid footer">
        <div class="row footer-credit">
            <div class="col-md-6 col-sm-6">
                <p>2017.6.24, <a href="e-learning.daejin.ac.kr">웹프로그래밍 과제</a>| Design hagi Himdeuleotsseoyo..</p>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/validator.js"></script>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-29231762-2', 'auto');
        ga('send', 'pageview');
    </script>


</body>
</html>