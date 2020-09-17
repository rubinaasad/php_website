<?php 
session_start();
?>

<html>
	<head>
		<title>Admin Login</title>
	</head>

<body bgcolor="gray">
<a href="welcome.html"> Click here to go back </a> </br></br>
	
	<form method="post" action="Login.php">
	
		<table width="400" border="10" align="center" bgcolor="pink">
			
			<tr>
				<td bgcolor="yellow" colspan="4" align="center"><h1>Admin Login form</h1></td>
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
				<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		
		
		</table>
	</form>

</body>
</html>
<?php 
include("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt = md5($user_password);
	$_SESSION['loggedin_time']=time();

	$admin_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
	
}

if(isset($_SESSION['user_name'])){
if(!isLoginSessionExpired()){
header("location:index.php");
}
else{
header("location:welcome.php?session_expired=1");
}
} 

function isLoginSessionExpired() {
	$login_session_duration = 10; 
	$current_time = time(); 
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["user_name"])){  
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}
?>