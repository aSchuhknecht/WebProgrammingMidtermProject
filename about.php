<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/about.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript/about.js"></script>

</head>

<header>
    <div class="row">
        <div class="col-md-1">Navigate: </div>
        <div class="col-md-2"><a href="index.php"><button type="button">Home</button></a></div>
        <div class="col-md-2"><a href="catalog.php"><button type="button">Schedule</button></a></div>
        <div class="col-md-2"><a href="roster.php"><button type="button">Roster</button></a></div>
        <div class="col-md-2"><a href="location.php"><button type="button">Location</button></a></div>
    </div>
</header>

<body>

    <div class="container-fluid">
        <div class="row" id="title">

            <div class="col-md-12" id="title2">
                <h1 id="pageTitle">About The Web Page</h1>
                <p>Developers: Adam Schuhknecht and Sam Ryan</p>
            </div>

        </div>


        <div class="row" id="row1">

            <div class="col-md-4">
                <img src="images/bball.jpg"  id = "lb" alt="bball">
            </div>

            <div class="col-md-4" id="mainDiv">
                <h2> Description of the Project</h2>

                <p> This web page serves as an informtional website about a fictional "dream team" which features
                    many of the best NBA players from the past and present. There are five html pages that can be
                    navigated:
                <ol>
                    <li> The Home Page (index.php) </li>
                    <li> The About Page (about.php) </li>
                    <li> The Upcoming Events Page (catalog.php) </li>
                    <li> The Roster Page (roster.php) </li>
                    <li> The Location Page (location.php)</li>
                </ol>
                The website was built using html, css, php, and SQL, along with the bootstrap framework.
                Javascript and JQuery were also used for additional functionality of the website, such as filtering
                the games on the upcoming games page. 


                </p>
            </div>

            <div class="col-md-4" id = "rightball">
                <img src="images/bball.jpg" id = "rb" alt="bball">
            </div>
        </div>



        <div class="row" id="row2">

            <div class="col-md-4"> <button type="button" class="btn2">Show
                </button></div>

            <div class="col-md-4">
                <h2> About the developers</h2>
            </div>

            <div class="col-md-4"> <button type="button" class="btn3">Show
                </button></div>

        </div>

        <div class="row" id="row3">

            <div class="col-md-5" id="adamBio">
                <h4> Adam Schuhknecht</h4>

                <p> Major: Computer Engineering <br> Age: 22 <br> Grade: Senior <br> Interests:

                <ul>
                    <li> running</li>
                    <li> biking</li>
                    <li> playing chess and poker</li>
                    <li> computer programming</li>
                </ul>

                </p>
            </div>

            <div class="col-md-2">

            </div>

            <div class="col-md-5" id="samBio">
                <h4> Sam Ryan</h4>
                <p> Major: Computer Science <br> Age: 21 <br> Grade: Junior <br> Interests:

                <ul>
                    <li> electronic music</li>
                    <li> PC games</li>
                    <li> chess</li>
                    <li> politics</li>
                </ul>

                </p>
            </div>
        </div>

    </div>

    </div>

</body>

</html>