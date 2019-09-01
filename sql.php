<!DOCTYPE html>
<html>
<h1>Login Panel </h1>
<body>
	<form action="sql.php" method="post">

		USERNAME: <input type="text" name="username">
		
		PASSWORD: <input type="password" name="pass">
		<input type="submit" name="submit">

	<?php
	include_once 'db.inc.php';
	if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$pass=$_POST['pass'];

		if (empty($username) || empty($pass)) 
		{
			header("Location:../sql.php?login=empty ");
			exit();
		}


		else
		{
			$sql="SELECT * FROM users Where username='$username'and pass='$pass'limit 0,1";
        $result= mysqli_query($conn,$sql);
        $rows= mysqli_fetch_array($result);
        if ($rows) {
      header("Location:success.php ");
      exit();
		}

		else {
			header("Location:invalid.php");
      		exit();

		}



	}
}
	?>
</body>
</html>