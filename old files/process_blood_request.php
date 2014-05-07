<?php
//session_start();

if(empty($_POST))
{exit();}
 $patientname=$_POST['patientname'];
 $patientdoctor=$_POST['patietdoctor'];
 $requiredon=$_POST['requiredon'];
 $bloodgroup=$_POST['bloodgroup'];
 $contactperson=$_POST['contactperson'];
 $place=$_POST['place']; 
 $contactno=$_POST['contactno']; 
 
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "insert into blood_request
 (request_patientname,request_patientdoctor,request_requiredon,request_bloodgroup,request_contactperson,request_place,request_contactno) values
			('{$patientname}','{$patientdoctor}','{$requiredon}','{$bloodgroup}','{$contactperson}','{$place}','{$contactno}');";
	
$result = mysql_query($query,$link); 
if (!$result) 
{ 
echo "Problem with query " ."<br/>"; 
exit(); 
} 
 mysql_close($conn);
				
?>	