<?php
	include 'comment.php';
	
?>
<html>
<head> <title></title>
<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
	<?php
	echo "<form name='enterComment' method='post' action='".setComment()."'>
			<div id='commentBox' >
				<strong>Name</strong> 
					<br/><input type='text' name='name'/><br/><br>
				<strong>Comment</strong> 
					<br/><textarea rows='5' cols='50' name='comment'> </textarea><br/><br/>
				<input type='submit' name='commentSubmit' value='Send your comment'/>
			</div>
		</form>";
	
getComment();		
?>


</body>	
</html>

