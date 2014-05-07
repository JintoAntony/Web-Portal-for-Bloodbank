<?php
//session_start();

if(empty($_POST))
{exit();}
 $patientname=$_POST['patientname'];
 $patientdoctor=$_POST['patientdoctor'];
 $hospital=$_POST['hospital']; 
 $place=$_POST['place']; 
 $district=$_POST['district']; 
 $email=$_POST['email']; 
 $requiredon=$_POST['requiredon'];
 echo $requiredon;
 $bloodgroup=$_POST['bloodgroup'];
 $contactperson=$_POST['contactperson'];

 $contactno=$_POST['contactno']; 
 
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
 
$query = "insert into blood_request
 (request_patientname,request_patientdoctor,request_hospital,request_place,request_district,request_email,request_requiredon,request_bloodgroup,request_contactperson,request_contactno) values
			('{$patientname}','{$patientdoctor}','{$hospital}','{$place}','{$district}','{$email}','{$requiredon}','{$bloodgroup}','{$contactperson}','{$contactno}');";
	
$result = mysql_query($query,$link); 
if (!$result) 
{ 
echo "Problem with query " ."<br/>"; 
exit(); 
} 
 mysql_close($link);
//header("location:request_sent.php"); 
				
?>	