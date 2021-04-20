<?php

session_start();

//this line is used for testing sessions
//session_unset();

$loggedIn = false;

if (isset($_SESSION["name"])) {
    //user is logged in, can access website
    $loggedIn = true;
}

else {
    //other pages are locked
    $loggedIn = false;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript/index.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row" id="title">
            <h1 id="pageTitle">NBA Dream Team</h1>
            <div>

                <a id="login" href="login.php">
                    <button class="btn1" type="button">Log in
                    </button>
                </a>
            </div>
        </div> 


        <div class="row" id="nav">

            <div class="col-md-3 margin">
                <img src="" class="img7">
            </div>

            <div class="col-md-3 center" id="about">
                <img src="images/genericlogo1.png" class="img1">
                <p>About the Web Page </p>
                <p>
                <?php
                if ($loggedIn) {
                    echo "<a href=\"about.php\">
                    <button class=\"btn1\" type=\"button\">View
                    </button>
                    </a>";
                }
                else {
                    echo "<a href=\" \">
                    <button class=\"btnFake\" type=\"button\">View
                    </button>
                    </a>";
                }
                ?>

                </p>

            </div>
            <div class="col-md-3 center" id="schedule">
                <img src="images/nba-logo.png" class="img2">
                <p>Upcoming Games </p>
                <p> 
                <?php
                if ($loggedIn) {
                    echo "<a href=\"catalog.php\">
                    <button class=\"btn1\" type=\"button\">View
                    </button>
                    </a>";
                }
                else {
                    echo "<a href=\" \">
                    <button class=\"btnFake\" type=\"button\">View
                    </button>
                    </a>";
                }
                ?>
                </p>
            </div>


            <div class="col-md-3 margin">
                <img src="" class="img6">

            </div>
        </div>


        <div class="row" id="row2">


            <div class="col-md-3 margin">
                <img src="" class=" img6">

            </div>

            <div class="col-md-3 center" id="roster">
                <img src="images/jordanMainpage.jpg" class="img3">
                <p>Team Roster </p>
                <p>
                <?php
                if ($loggedIn) {
                    echo "<a href=\"roster.php\">
                    <button class=\"btn1\" type=\"button\">View
                    </button>
                    </a>";
                }
                else {
                    echo "<a href=\" \">
                    <button class=\"btnFake\" type=\"button\">View
                    </button>
                    </a>";
                }
                ?>
                </p>
            </div>

            <div class="col-md-3 center" id="">
                <img src="images/homeStadium.jfif" class="img4">
                <p>Location</p>
                <p> 
                <?php
                if ($loggedIn) {
                    echo "<a href=\"location.php\">
                    <button class=\"btn1\" type=\"button\">View
                    </button>
                    </a>";
                }
                else {
                    echo "<a href=\" \">
                    <button class=\"btnFake\" type=\"button\">View
                    </button>
                    </a>";
                }
                ?>
                </p>
            </div>


            <div class="col-md-3 margin">
                <img src="" class="img6">

            </div>
        </div>



    </div>

    <div class="row" id="footer">
        <p>Updated February 28th, 2021 </p>
    </div>


</body>

</html>