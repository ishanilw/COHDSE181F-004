<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_COOKIE["uName"]))
	{
		echo "Hello ".$_COOKIE["uName"]." welcome BACK". "<br>";
		
	}
	else
	{
		header('Location:log.html');
	}
	?>
	
</body>
</html>