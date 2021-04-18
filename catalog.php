<?php

define('DBHOST', '');
define('DBNAME', 'nba');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Catalog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/catalog.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript/catalog.js"></script>

</head>

<header>
    <div class="row">
        <div class="col-md-1">Navigate: </div>
        <div class="col-md-2"><a href="index.php"><button type="button">Home</button></a></div>
        <div class="col-md-2"><a href="about.php"><button type="button">About</button></a></div>
        <div class="col-md-2"><a href="roster.php"><button type="button">Roster</button></a></div>
        <div class="col-md-2"><a href="location.php"><button type="button">Location</button></a></div>
    </div>
</header>

<body>
    <div class="container-fluid">
        <div class="row" id="title">
            <div class="col-md-11">
                <h1 id="pageTitle">Upcoming Games</h1>
            </div>

        </div>

        <div class="row" id="filter">

            <div class="col-md-2">
                <h3> Filter: </h3>
            </div>

            <div class="col-md-2">

                <button id="all"> Show all games</button>
            </div>

            <div class="col-md-2">
                <button id="home"> Show home games</button>
            </div>

            <div class="col-md-2">
                <button id="away"> Show away games</button>
            </div>
        </div>

        <div class="row" id="schedule">
            <table id="t1">
                <thead>
                    <th>
                        Opponent
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Location
                    </th>
                    <th>
                        Time
                    </th>

                    <th> Over/Under </th>

                </thead>
                <tbody>

                  
                    <?php  
                           /* programmatically loop though employees and display each
                              name as <td> element. */
                              $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                              if ( mysqli_connect_errno() ) {
                                die( mysqli_connect_error() );
                              }
                              $sql = "select * from games";
                              if ($result = mysqli_query($connection, $sql)) {
                                // loop through the data
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                  $opp = $row['opponent'];
                                  $logo = $row['logo'];
                                  $date = $row['date'];
                                  $loc = $row['location'];
                                  $time = $row['time'];
                                  $ou = $row['overunder'];
                                  $class = $row['class'];
                                 
                                  echo "<tr class= \"" . $class . "\" >" ;
                                  echo "<td> <p>" . $opp . "</p>";
                                  echo "<img src = \"" . $logo . "\" class=\"teamlogo\" alt=\"\"> </td>";
                                  echo "<td>" . $date . "</td>";
                                  echo "<td>" . $loc . "</td>";
                                  echo "<td>" . $time . "</td>";
                                  echo "<td>" . $ou . "</td>";
                                  echo "</tr>";
                                }
                                // release the memory used by the result set
                                mysqli_free_result($result);
                              }
                              // close the database connection
                              
                          ?>

                </tbody>
            </table>
        </div>
    </div>
</body>