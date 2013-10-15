<?php
	/**
	 * SIMPLE CAPTCHA IMAGE SCRIPT
	 * Copyright (C) 2010  Constantin Boiangiu  (http://www.php-help.ro)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 * 
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 **/

	/*
		we start by setting our security number
		that will verify if our user is human
		and not some pesky robot.
		Note that session_start() must be set BEFORE
		sending anything else to the brower (no echo or 
		html tags above the session_start() function)
	*/
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
<title>Simple capcha image</title>
</head>

<body>
This is our capcha image. In order for this to work, your server must have<br>
GD Libraries installed with the ttftext extension activated.<br>
<img src="image.php" alt="well, this is out capcha image" />
</body>
</html>

