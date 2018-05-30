<?php

function setComment()
{
	$con = mysqli_connect("localhost:3306", "root", "");
	mysqli_select_db($con, "comment");

	
	if(isset($_POST['commentSubmit']))
	{
		$name = $_POST["name"];
		$cmm = $_POST["comment"];
		
		$sql ="INSERT INTO comment(name, comment) VALUES('$name', '$cmm')";
		$rst = mysqli_query( $con, $sql);
	}
	
}

function getComment()
{
	$con = mysqli_connect("localhost:3306", "root", "");
	mysqli_select_db($con, "comment");
	
	$sql = "SELECT name, comment FROM comment";
	$rst = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($rst))
	{
		echo $row['name']. "<br/>";
		echo $row['comment']. "<br/><br/>";
	}
}
?>