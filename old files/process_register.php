<?php
//session_start();
/*$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("blood",$link) or die("can not select database");
if(empty($_POST))
{exit;}
$name= $_POST['username'];
$error=0; 
$query="select username from employees where ee_email = '$name' ";
$empresult = mysqli_query($dbc,$emp);
while(($row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC))) 
 {if($row['username']==$name)
 {$error=1;}}	
if($error==0)
{
$query = "insert into patient (patient_id,patient_username, patient_password, patient_eadd, patient_lname) values
			('{$name}','{$email}','{$username}','{$password}','{$bloodgroup}','{$app_date}','{$gender}','{$last}','{$weight}','{$district}','{$address}','{$city}','{$no}');";
	
$result = mysql_query($query,$link); 
				if (!$result) 
				{ echo "Problem with query " . $query . "<br/>"; 
				  //echo pg_last_error(); 
				exit(); 
				} 
 mysql_close($conn);				
}	*/


 $name=$_POST['fullname'];
 echo $name;
 $gender=$_POST['gender'];
 echo $gender; 
 $dob=$_POST['dob'];
 echo $dob;
 $bloodgroup=$_POST['bloodgroup'];
 echo $bloodgroup;
 $mobilenumber=$_POST['mobilenumber'];
 echo $mobilenumber;
 $email=$_POST['email'];
 echo $email;
 $username=$_POST['username'];
 echo $username;
 $password=$_POST['password'];
 echo $password;
 $weight=$_POST['weight'];
 $last=$_POST['last_donated'];
 $district=$_POST['district'];
 $taluk=$_POST['taluk'];
 $residencenumber=$_POST['residencenumber'];
 $address=$_POST['address'];
 $message=$_POST['message'];
 $community=$_POST['community']; 
 
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");

$query = "insert into user (user_fullname,user_gender,user_dob,user_bloodgroup,
user_mobilenumber,user_email,user_username,user_password,user_weight,
user_lastdonated,user_district,user_taluk,user_residencenumber,user_address,
user_address,user_message,user_community) values
	     ('{$fullname}','{$gender}','{$dob}','{$bloodgroup}','{$mobilenumber}','{$email}','{$username}',
		 '{$password}','{$weight}','{$lastdonated}','{$district}','{$taluk}','{$residencenumber}','{$address}'
		 ,'{$message}','{$community}');";
		 
$result = mysql_query($query,$link); 
				if (!$result) 
				{ echo "Problem with query " ."<br/>"; 
				exit(); 
				} 
mysql_close($conn);
?>	