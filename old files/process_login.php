<?php
//session_start();
    $link=mysql_connect("localhost","root","root")or die("can not connect");
	mysql_select_db("bloodbank",$link) or die("can not select database");	
	$q = "select * from user where user_username= '".$_POST['username']."'";
	$res = mysql_query($q,$link) or die("wrong query");
	$row = mysql_fetch_assoc($res);
	
	if(!empty($row))
	{	if($_POST['password']==$row['user_password'])
		{
			//login
			$_SESSION = array();			
			$_SESSION['fullname']=$row['user_fullname'];
			$_SESSION['status']=1;
			$_SESSION['user']=1;			
			header("location:index.php");
		}
		else
		{
		//	echo "Wrong Password";
		}
	}
	else
	{
	//	echo "No Such User";
	}
?>