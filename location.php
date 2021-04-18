<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Location</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="css/location.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="javascript/location.js"></script>

</head>

<header>
	<div class="row">
		<div class="col-md-1">Navigate: </div>
		<div class="col-md-2"><a href="index.php"><button type="button">Home</button></a></div>
		<div class="col-md-2"><a href="about.php"><button type="button">About</button></a></div>
		<div class="col-md-2"><a href="catalog.php"><button type="button">Schedule</button></a></div>
		<div class="col-md-2"><a href="roster.php"><button type="button">Roster</button></a></div>
	</div>
</header>

<body>
	<div class="container-fluid">
		<div class="row" id="title">
			<div class="col-md-11">
				<h1 id="pageTitle">Kalamazoo</h1>
				<h5>Welcome to Michigan!</h5>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="images/Kalamazoo.jpg" class="Kalamazoo">
			</div>
			<div class="col-md-6">
				<img src="images/Downtown.jpg" class="Kalamazoo">
			</div>
		</div>
		<div class="row" id="stadiumHead">
			<h1>Dream Stadium</h1>
		</div>
		<div class="row">
			<img src="images/homeStadium2.jfif" id="stadium">
		</div>
		<div class="row" id="description">
			Through methods unknown, Madison Square Garden has relocated to Kalamazoo, MI! This stadium is the only
			location fitting for the Dream Team.<br>
			Capacity: 18,200<br>
			First Opened: 1879<br>
			Original Location: New York City<br>
			<br>
			Madison Square Garden is considered by many to be the best venue in America. Now, in its new location, it is
			also home to the best basketball team in history.
		</div>
		<div class="row">
			<div class="col-md-3">
				<button type="button" id=tickets>Purchase Tickets</button>
			</div>
		</div>
	</div>

</body>