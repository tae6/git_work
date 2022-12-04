<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

	$host = 'localhost';
	$user = 'ptj';
	$pw = '1234';
	$dbName = 'test3';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$title = $_POST['title'];
	$script = $_POST['script'];
	
	$sql = "insert into board (
		title,
		script
		
	)";
	
	$sql = $sql. "values (
			'$title',
			'$script'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	 location.href = "profile_1.html";
</script>
</html>