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
	<title>Roster</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="css/roster.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

</head>

<header>
	<div class="row">
		<div class="col-md-1">Navigate: </div>
		<div class="col-md-2"><a href="index.php"><button type="button">Home</button></a></div>
		<div class="col-md-2"><a href="about.php"><button type="button">About</button></a></div>
		<div class="col-md-2"><a href="catalog.php"><button type="button">Schedule</button></a></div>
		<div class="col-md-2"><a href="location.php"><button type="button">Location</button></a></div>
		<div class="col-md-2"><a href="login.php"><button type="button">Login</button></a></div>

	</div>
</header>

<body>
	<div class="container-fluid">
		<div class="row" id="title">
			<div class="col-md-11">
				<h1 id="pageTitle">NBA Dream Team</h1>
			</div>

		</div>
		<div class="row" id="roster">
			<table>
				<thead>
					<th>
						Name
					</th>
					<th>
						Number
					</th>
					<th>
						Position
					</th>
					<th>
						Statistics
					</th>
					<th>
						Height
					</th>
					<th>
						Career
					</th>
					<th class="additional">
						Age
						<div>Current or Age @ Retirement</div>
					</th>
					<th>
						Origin
					</th>
					<th class="additional">
						More
						<div>Link to wiki</div>
					</th>
				</thead>
				<tbody>

				<?php  
                           /* programmatically loop though employees and display each
                              name as <td> element. */
                              $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                              if ( mysqli_connect_errno() ) {
                                die( mysqli_connect_error() );
                              }
                              $sql = "select * from stats";
                              if ($result = mysqli_query($connection, $sql)) {
                                // loop through the data
                                while ($row = mysqli_fetch_assoc($result))
                                {
									$firstName = $row['firstName'];
									$lastName = $row['lastName'];
									$img = $row['img'];
									$num = $row['number'];
									$pos = $row['position'];
									$ppg = $row['ppg']; $apg = $row['apg']; $rpg = $row['rpg'];
									$height = $row['height'];
									$i1 = $row['i1']; $i2 = $row['i2']; $i3 = $row['i3']; $i4 = $row['i4'];
									$origin = $row['origin'];
									$wiki = $row['wiki'];
									$age = $row['age'];

                                  	echo "<tr class= \"player\">";
								  	echo  "<td class=\"small\">";
									echo "<div class=\"name\">" . $firstName . " " . $lastName . "</div>";
									echo "<img src=\""  . $img . "\" class=\"playerimg\"> </td>";  
									echo "<td class=\"small\">";
									echo "<div class=\"playerNum\">" . $num . "</div> </td>";
									echo "<td> <div class=\"position\">" . $pos . "</div> </td>";
									echo "<td> <div class=\"stat\">PPG: " . $ppg . "</div>";
									echo "<div class=\"stat\">APG:" . $apg . "</div>";
									echo "<div class=\"stat\">RPG:" . $rpg . "</div> </td>";
									echo "<td> <div class=\"height\">" . $height . "</div> </td>";
									echo "<td> <div class=\"career\">" . $i1 . "<br>" . $i2 . "<br>" . $i3 . "<br>". $i4 . "</div> </td>";
									echo "<td> <div class=\"age\">" . $age . "</div> </td>";
									echo "<td> <div class=\"origin\">" . $origin . "</div> </td>";
									echo "<td> <a href=\"" . $wiki . "\">More Info</a> </td> </tr>";
                                }
                                // release the memory used by the result set
                                mysqli_free_result($result);
                              }
                              
                    ?>
					
				</tbody>
			</table>
		</div>
	</div>
</body>