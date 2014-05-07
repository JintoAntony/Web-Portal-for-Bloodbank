<?php
//session_start();

if(empty($_POST))
 {
 exit();
 }
 $bloodgroup=$_POST['bloodgroup'];
 $gender=$_POST['gender'];
 $district=$_POST['district'];
 
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "select user_id,user_fullname,user_gender,user_bloodgroup,user_mobilenumber from user where
(user_bloodgroup='$bloodgroup' and user_district='$district' and user_gender='$gender')";
$result = mysqli_query($link,$query);
if($result)
{ 
    if(mysqli_affected_rows($link)!=0)
	{
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {
           echo $row['user_fullname'];
		   echo $row['user_gender'];
		   echo $row['user_bloodgroup'];
		   echo $row['user_mobilenumber'];
		   echo '<a href="#">More</a>';
         }
    }	
else 
echo "No Results ";
}

?>	