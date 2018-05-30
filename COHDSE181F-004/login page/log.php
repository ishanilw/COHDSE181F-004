<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
	
</head>

<body>
	<!--<img src="52883.jpg" id="bg" alt=""/>-->
	<div id="box">
		<h1>LOGIN</h1>
	
		<form name="log" method="post" action="#" id="login">
		<p>User Name</p>  
		<input type="text" name="uName" placeholder="Enter user name"/><br/><br/>
		<p>Password</p>
		<input type="password" name="pwd" placeholder="Enter password"/><br/><br/><br/><br/>
		<input type="submit" name="submit" value="Login" id="log"/>
		</form>
	</div>
	

<?php
if(isset($_POST["uName"]))
{
	$con = mysqli_connect("localhost:3306", "root", "");
	mysqli_select_db($con, "assignment");

	if (!$con)
	{    
		die(mysqli_error($db));
	} 


	$sql = "select * from user where Uname = '".$_POST["uName"]."' and Upassword = '".$_POST["pwd"]."'";
	$rst = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($rst);
	if($row['Uname']=$_POST["uName"] && $row['Upassword']=$_POST["pwd"])
	{
		setcookie("uName", $_POST["uName"], time()+60, "/"," ", 0);
		setcookie("pwd", $_POST["pwd"], time()+60, "/", " ", 0);

		header("Location: welcome.php");
	
	}
	else
		{
			
			//echo"<script type='text/javascript'>alert('Invalid user name or password');</script>";
			//header("Location: log.html");		
			echo"Invalid user name or password!";	
		}
		
}


?>
</body>
</html>

