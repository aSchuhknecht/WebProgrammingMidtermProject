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
					<tr class="player">
						<td class="small">
							<div class="name">LeBron James</div>
							<img src="images/LebronJames.jpg" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">23</div>
						</td>
						<td>
							<div class="position">Point Guard</div>
						</td>
						<td>
							<div class="stat">PPG: 25.7</div>
							<div class="stat">APG: 7.9</div>
							<div class="stat">RPG: 8.2</div>
						</td>
						<td>
							<div class="height">6'9"</div>
						</td>
						<td>
							<div class="career">
								Miami Heat, Cleveland Cavaliers, LA Lakers<br>
								4x Finals MVP<br>
								4x NBA Champion<br>
								17x All Star
							</div>
						</td>
						<td>
							<div class="age">36</div>
						</td>
						<td>
							<div class="origin">Ohio</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/LeBron_James">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Magic Johnson</div>
							<img src="images/MagicJohnson.jpg" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">32</div>
						</td>
						<td>
							<div class="position">Point Guard</div>
						</td>
						<td>
							<div class="stat">PPG: 19.5</div>
							<div class="stat">APG: 11.2</div>
							<div class="stat">RPG: 7.2</div>
						</td>
						<td>
							<div class="height">6'9"</div>
						</td>
						<td>
							<div class="career">
								LA Lakers<br>
								3x Finals MVP<br>
								5x NBA Champion<br>
								12x All Star
							</div>
						</td>
						<td>
							<div class="age">36</div>
						</td>
						<td>
							<div class="origin">Michigan</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Magic_Johnson">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Michael Jordan</div>
							<img src="images/MichealJordan.jfif" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">23</div>
						</td>
						<td>
							<div class="position">Guard</div>
						</td>
						<td>
							<div class="stat">PPG: 30.1</div>
							<div class="stat">APG: 5.3</div>
							<div class="stat">RPG: 6.2</div>
						</td>
						<td>
							<div class="height">6'6"</div>
						</td>
						<td>
							<div class="career">
								Chicago Bulls, WA Wizards<br>
								6x Finals MVP<br>
								6x NBA Champion<br>
								14x All Star
							</div>
						</td>
						<td>
							<div class="age">30</div>
						</td>
						<td>
							<div class="origin">New York</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Michael_Jordan">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Kobe Bryant</div>
							<img src="images/KobeBryant.jpg" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">24</div>
						</td>
						<td>
							<div class="position">Guard</div>
						</td>
						<td>
							<div class="stat">PPG: 25</div>
							<div class="stat">APG: 4.7</div>
							<div class="stat">RPG: 5.2</div>
						</td>
						<td>
							<div class="height">6'6"</div>
						</td>
						<td>
							<div class="career">
								LA Lakers<br>
								2x Finals MVP<br>
								5x NBA Champion<br>
								18x All Star
							</div>
						</td>
						<td>
							<div class="age">36</div>
						</td>
						<td>
							<div class="origin">Pennsylvania</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Kobe_Bryant">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Kevin Durant</div>
							<img src="images/KD.jfif" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">7</div>
						</td>
						<td>
							<div class="position">Small Forward</div>
						</td>
						<td>
							<div class="stat">PPG: 29</div>
							<div class="stat">APG: 5.3</div>
							<div class="stat">RPG: 7.3</div>
						</td>
						<td>
							<div class="height">6'10"</div>
						</td>
						<td>
							<div class="career">
								OKC Thunder, Golden State Warriors, Brooklyn Nets<br>
								2x Finals MVP<br>
								2x NBA Champion<br>
								11x All Star
							</div>
						</td>
						<td>
							<div class="age">32</div>
						</td>
						<td class="small">
							<div class="origin">Washington D.C.</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Kevin_Durant">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Karl Malone</div>
							<img src="images/KarlMalone.jfif" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">11</div>
						</td>
						<td>
							<div class="position">Power Forward</div>
						</td>
						<td>
							<div class="stat">PPG: 25</div>
							<div class="stat">APG: 3.6</div>
							<div class="stat">RPG: 10.1</div>
						</td>
						<td>
							<div class="height">6'9"</div>
						</td>
						<td>
							<div class="career">
								Utah Jazz, LA Lakers<br>
								2x NBA MPV<br>
								14x All Star
							</div>
						</td>
						<td>
							<div class="age">41</div>
						</td>
						<td class="small">
							<div class="origin">Louisiana</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Karl_Malone">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">James Harden</div>
							<img src="images/JamesHarden.jpg" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">13</div>
						</td>
						<td>
							<div class="position">Shooting Guard</div>
						</td>
						<td>
							<div class="stat">PPG: 25.2</div>
							<div class="stat">APG: 6.5</div>
							<div class="stat">RPG: 5.4</div>
						</td>
						<td>
							<div class="height">6'5"</div>
						</td>
						<td>
							<div class="career">
								OKC Thunder, Houston Rockets, Brooklyn Nets<br>
								3x NBA Scoring Champion<br>
								NBA MVP<br>
								9x All Star
							</div>
						</td>
						<td>
							<div class="age">31</div>
						</td>
						<td class="small">
							<div class="origin">California</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/James_Harden">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Shaquille O'Neal</div>
							<img src="images/Shaq.jpg" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">34</div>
						</td>
						<td>
							<div class="position">Center</div>
						</td>
						<td>
							<div class="stat">PPG: 23.7</div>
							<div class="stat">APG: 2.5</div>
							<div class="stat">RPG: 10.9</div>
						</td>
						<td>
							<div class="height">7'1"</div>
						</td>
						<td>
							<div class="career">
								Orlando Magic, LA Lakers, Miami Heat,<br> Pheonix Suns, Cleveland Cavaliers, Boston
								Celtics<br>
								3x Finals MVP<br>
								4x NBA Champion<br>
								15x All Star
							</div>
						</td>
						<td>
							<div class="age">39</div>
						</td>
						<td class="small">
							<div class="origin">New Jersey</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Shaquille_O'Neal">More Info</a>
						</td>
					</tr>
					<tr class="player">
						<td class="small">
							<div class="name">Kareem Abdul-Jabbar</div>
							<img src="images/Kareem.png" class="playerimg">
						</td>
						<td class="small">
							<div class="playerNum">33</div>
						</td>
						<td>
							<div class="position">Center</div>
						</td>
						<td>
							<div class="stat">PPG: 24.6</div>
							<div class="stat">APG: 3.6</div>
							<div class="stat">RPG: 11.2</div>
						</td>
						<td>
							<div class="height">7'2"</div>
						</td>
						<td>
							<div class="career">
								Milwaukee Bucks, LA Lakers<br>
								2x Finals MVP<br>
								6x NBA Champion<br>
								19x All Star
							</div>
						</td>
						<td>
							<div class="age">42</div>
						</td>
						<td class="small">
							<div class="origin">New York</div>
						</td>
						<td>
							<a href="https://en.wikipedia.org/wiki/Kareem_Abdul-Jabbar">More Info</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>