<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<center>

<div class="header2">
	<h2>Login Form</h2>
</div>
<div class="three">
<form action="" method="POST">
<table>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" required></td>
	</tr>

	<tr>
		<td>Password:</td>
		<td><input type="password" name="pass" required></td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		
	</tr>

	<tr>
	</tr>
</table>

	<input type="submit" name="submit" value="Login" id="send">
	<br><label id="b">Don't have account?</label>
		<a href="registration.php" >Register</a>
		
</form>
</div>
<center>
</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$conn=mysqli_connect('localhost', 'root', '', 'sampleasc');


		$username= $_POST['username']; 
		$pass= $_POST['pass'];

		$sql="SELECT * from registration WHERE username = '$username' AND password = '$pass'";
		$fetch = mysqli_query($conn,$sql);

		$data=mysqli_fetch_array($fetch);

		if ($username == $data['username'] && $pass == $data['password']) {
			$_SESSION['username'] = $username;
			header('location:home.php');
		}

		else
		{
			echo "<script>alert('Incorrect Username or Password')</script>";
		}
	}

 ?>