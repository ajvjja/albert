<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<center>

<div class="header">
	<h2>Registration Form</h2>
</div>
<div class="two">
<form action="" method="POST">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" required></td>
		</tr>

		<tr>
			<td>Date of Birth: </td>
			<td><input type="date" name="birth" required></td>
		</tr>

		<tr>
			<td>Contact Details: </td>
			<td><input type="text" name="contact" required></td>
		</tr>

		<tr>
			<td>Address: </td>
			<td><input type="text" name="address" required></td>
		</tr>

		<tr>
			<td>Username: </td>
			<td><input type="text" name="username" required></td>
		</tr>

		<tr>
			<td>Password: </td>
			<td><input type="password" name="pass" required></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
		</tr>

		<tr>
			
		</tr>
	</table>

		<input type="submit" name="submit" value="Register"id="send">
		<br><label>Already have account?</label>
		<a href="index.php" >Login</a>

</form>
</div>
</center>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$conn=mysqli_connect('localhost', 'root', '', 'sampleasc');

	$name= $_POST['name'];
	$birth= $_POST['birth'];
	$contact= $_POST['contact'];
	$address= $_POST['address'];
	$username= $_POST['username']; 
	$pass= $_POST['pass'];


	$sql="INSERT INTO registration (name,dateofbirth,contact,address,username,password) VALUES ('$name','$birth', '$contact', '$address', '$username', '$pass')";

	if (mysqli_query($conn,$sql)) 
		{
			echo "<script>alert('Registration Success')</script>";
		}
	
	else
		{
			echo "<script>alert('Registration Failed')</script>";
		}
}
 ?>
