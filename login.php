<?php

define('DBHOST', '');
define('DBNAME', 'nba');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=nba;charset=utf8mb4');

?>

<?php
try {
	$msg = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    	$name = $_POST["name"];
    	$password = $_POST["password"];
	 	if ($name == '' || $password == '') {
        	$msg = "You must enter all fields";
    	} else {
    		$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);   
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       		$sql = "SELECT * FROM members WHERE name =?";
        	$result = $pdo->prepare($sql);
        	$result->execute([$name]);
        	$count = $result->rowCount();
        	$row = $result->fetch();
       		if ($count > 0 AND password_verify($password, $row['password'])) {
            	$_SESSION["name"] = $_POST["name"];
            	header("location: index.php");
        	}
        	else{
        		$msg = "Username and password do not match";
        	}
    	}
	}
}
catch(PDOException $error)
{
	$msg = $error->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
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

	<body>  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($msg))  
                {  
                     echo '<label class="text-danger">'.$msg.'</label>';  
                }  
                ?>  
                <h3 align="">Login</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="name" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-primary" value="Login" />
                     <a href="signup.php">
                        <button class="btn btn-info" type="button" >Create an Account</button>
                        </button>
                    </a>
                </form>  
           </div>  
           <br />  
      </body> 

</body>
</html>
