<?php
	session_start();
	$email=$_POST['email'];
	$password=$_POST['pass'];


	if($email=="" || $password=="")
	{
		echo"Fill all";
		echo "<a href='Login.html'>Click here to go back</a>";
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("database");
		$query="SELECT * FROM project WHERE email='$email' AND password='$password' ";
		$result=mysql_query($query);
		$row=mysql_num_rows($result);
		if($row!=0)
		{
			$_SESSION['email']=$email;
			header ("location: Welcome.php");
		}
		else
		{
			echo "Mismatch";
			echo "<a href='login.php'>Click here to go back</a>";
		}
	}
?>
