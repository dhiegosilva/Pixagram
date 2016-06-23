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
	$password = htmlspecialchars($_REQUEST["pass"]);
	$sql="SELECT * FROM `User` where UserId='".$user."' and password='".$password."'";

	$result = mysql_query($sql);
	//echo $sql;

    if (mysql_num_rows($result)==1)
	{
		echo "Success";
	}
	else
	{
		echo "Wrong";
 	}

?>
