

<html>
	<head>
		<title>Admin Registration</title>
	</head>

<body bgcolor="gray">
<h2>Registration Page </h2>
<a href="welcome.html"> Click here to go back </a> </br></br>
	
	<form method="post" action="Register.php">
	
		<table width="400" border="10" align="center" bgcolor="pink">
			
			<tr>
				<td bgcolor="yellow" colspan="4" align="center"><h1>Admin Registration form</h1></td>
			</tr>
		
			<tr>
				<td align="right">User Name:</td>
				<td><input type="text" name="user_name"></td>
			</tr>
			
			<tr>
				<td align="right">User Password:</td>
				<td><input type="password" name="user_pass"></td>
			</tr>
			
			<tr>
				<td colspan="4" align="center"><input type="submit" name="register" value="Register"></td>
			</tr>
		
		
		</table>
	</form>

</body>
</html>
<?php 

if(isset($_POST['register'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	$encrypt = md5($user_password);
	$bool=true;
include("includes/connect.php");
	

	$admin_query =mysql_query( "Select * from admin_login");
while($row=mysql_fetch_array($admin_query))
{
$table_users=$row['user_name'];
if($user_name==$table_users)
{
$bool=false;
Print '<script>alert("Username has been taken!");</script>'; //alerts the user
			Print '<script>window.location.assign("Register.php");</script>'; // redirects to register.php
}
}
if($bool)
{
mysql_query("Insert into admin_login (user_name,user_pass) VALUES ('$user_name','$user_pass')");
Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("Welcome.html");</script>'; // redirects t

}
}
?>
