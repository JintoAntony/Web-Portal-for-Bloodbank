<?php session_start();
//session_start();
    $link=mysql_connect("localhost","root","root")or die("can not connect");
	mysql_select_db("bloodbank",$link) or die("can not select database");	
	$q = "select * from user where user_email= '".$_POST['username']."'";
	$res = mysql_query($q,$link) or die("wrong query");
	$row = mysql_fetch_assoc($res);
	
	if(!empty($row))
	{	if($_POST['password']==$row['user_password'])
		{
			$_SESSION = array();			
			$_SESSION['fullname']=$row['user_fullname'];
			$_SESSION['status']=1;
			$_SESSION['user']=1;
			$_SESSION['user_id']=$row['user_id'];
			header("location:index.php");
		}
		else
		{
		header("location:login_failed.php");
		}
	}
	else
	{
	header("location:login_failed.php");
	}
?>