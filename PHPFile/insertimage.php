<?php
	//$con = mysql_connect ("localhost", "ubiapp", "UbiApp!2015");
	$con = mysql_connect ("localhost", "myUbiApp", "ubiApp");
	if (!$con)
	{
		die('<br>Could not connect: ' . mysql_error());
		}
	else
	{
		@mysql_select_db ("myUbiApp", $con);
	}	

	$user = htmlspecialchars($_REQUEST["user"]);
	$path = htmlspecialchars($_REQUEST["path"]);
	$sql="INSERT INTO `Image`(UserId,path) VALUES ('".$user."','".$path."')";

	$result = mysql_query($sql);
       if ($result)
	{
		echo "Success";
	}
	else 
	{
		echo "Wrong";
 	}

?>
