<?php
session_start();

define('DBHOST', '');
define('DBNAME', 'nba');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=nba;charset=utf8mb4');
?>

<?php
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);   
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
    		$msg = 'The email you have entered is invalid, please try again.';
		} 
		else {
			$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been sent to your email.';
			$hash = md5(rand(0,1000));
			$password = $_POST['password'];
			$sql = "INSERT INTO members (name, email,password, hash) VALUES(?,?,?,?)";
			$result = $pdo->prepare($sql);
			$result->execute([$name, $email, password_hash($password, PASSWORD_BCRYPT), $hash]);
/*
			$to = $email;
			$subject = 'Signup | Verification';
			$message = '
				Thanks for signing up!
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$name.'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
http://localhost/webprogrammingFinalProject/WebProgrammingMidtermProject/verify.php?email='.$email.'&hash='.$hash.'';

			$headers = 'From:samuel.david.ryan@gmail.com';
			mail($to, $subject, $message, $headers);
*/
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
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
	<br/>  
        <div class="container" style="width:500px;">  
            <?php  
                if(isset($msg)) {  
                    echo '<div>'.$msg.'</div>';  
                }  
            ?>  
            <h3 align="">Account Creation</h3><br />  
            <form method="post">  
            	<label>Email</label>  
                <input type="text" name="email" class="form-control" />  
                <br /> 
                <label>Username</label>  
                <input type="text" name="name" class="form-control" />  
                <br />
                <label>Password</label>
                <input type="text" name="password" class="form-control" />    
                <input type="submit" name="create" class="btn btn-primary" value="Create" />
            </form>  
        </div>  
    <br /> 
</body>
</html>