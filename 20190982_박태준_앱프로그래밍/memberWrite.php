<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'ptj';
		$pw = '1234';
		$dbName = 'test3';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $member_name = $_POST['name'];
		$member_email = $_POST['email'];
	    $member_pw_1 = $_POST['pw_1'];

		$sql = "insert into member (
				member_name,
				member_email,
				member_pw_1
				
		)";
		
		$sql = $sql. "values (
				'$member_name',
				'$member_email',
				'$member_pw_1'
				
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("success inserting")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "signin.html";
</script>

</html>