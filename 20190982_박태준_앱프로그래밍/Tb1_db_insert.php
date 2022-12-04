<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

	$host = 'localhost';
	$user = 'ptj';
	$pw = '1234';
	$dbName = 'test3';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	$status = $_POST['status'];
	$password = $_POST['password'];

	$sql = "insert into tb1 (
		firstname,
		lastname,
		email,
		country,
		zip,
		status,
		password
	)";
	
	$sql = $sql. "values (
			'$firstname',
			'$lastname',
			'$email',
			'$country',
			'$zip',
			'$status',
			'$password'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	 location.href = "table.html";
</script>
</html>