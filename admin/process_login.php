<?php session_start();

if(empty($_POST))
{exit;}	
$username=$_POST['username'];
$password=$_POST['password'];

$link=mysql_connect("localhost","root","root")or die("can not linkect");
mysql_select_db("bloodbank",$link) or die("can not select database");

$query= "select username,password from admin where username='$username'";
$result= mysql_query($query,$link) or die("wrong query");
$row = mysql_fetch_assoc($result);

if($row['username']==$username && $row['password']==$password)
		  {		  
		    $_SESSION['user']=$row['username'];
			header("location:admin_home.php");		  
		  }
else
{
echo "Invalid username and password";	 
}  	 
mysql_close($link);  

?>