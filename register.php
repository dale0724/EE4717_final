<html>

<head>
	<title>Log in page</title>
	<link rel="stylesheet" href="myStyle.css" />
</head>

<body>
	<div class="signInRegister">
		<?php // register.php
		include "dbconnect.php";

		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		$sql = "SELECT * FROM Users Where UserName = $username";
		//	echo "<br>". $sql. "<br>";
		$result = $dbcnx->query($sql);
		if ($result) {
			echo "Duplicated User Name!";
			echo '<a href="registration.html">Back<a/>';
			exit;
		}
		$password = md5($password);
		// echo $password;
		$sql = "INSERT INTO Users(UserName, UserPassword) VALUES ('$username', '$password')";
		//	echo "<br>". $sql. "<br>";
		$result = $dbcnx->query($sql);
		if (!$result)
			echo "Your query failed.";
		else{
			session_start();
			$_SESSION['valid_user']=$username;
			echo '<h1> Welcome ' . $username . ". You are now registered </h1>";
			echo '<a href="home.php"> <h2> Home Page </h2> </a>';
		}
			
		?>
	</div>

</body>

</html>