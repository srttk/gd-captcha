<?php
	
	session_start();
	/*
		here you can do your verifications from forms
		(like if($_POST['number_inserted_by_user']!=$_SESSION['security_number']) echo "error triggered!")
	*/
	$_SESSION['security_number']=rand(10000,99999);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simple GD capcha image</title>
</head>

<body>
This is our capcha image. In order for this to work, your server must have<br>
GD Libraries installed with the ttftext extension activated.<br>
<img src="image.php" alt="well, this is out capcha image" />
</body>
</html>

