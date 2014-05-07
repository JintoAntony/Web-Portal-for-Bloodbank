<?php session_start();

	$link=mysql_connect("localhost","root","root")or die("can not linkect");
    mysql_select_db("bloodbank",$link) or die("can not select database");

$id=$_GET['id'];
$query = "DELETE FROM user WHERE user_id='$id'";
$result = mysql_query( $query, $link );

if($result)
{ header("location:show_details.php"); }
else
{ echo "Delete not possible"; }
 
?>