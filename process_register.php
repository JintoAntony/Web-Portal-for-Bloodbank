<?php
//session_start();

 $fullname=$_POST['fullname'];
 echo $fullname."<br/>";
 $gender=$_POST['gender'];
 echo $gender."<br/>";
 $dob=$_POST['dob'];
 echo $dob."<br/>";
 $bloodgroup=$_POST['bloodgroup'];
 echo $bloodgroup."<br/>";
 $mobilenumber=$_POST['mobilenumber'];
 echo $mobilenumber."<br/>";
 $email=$_POST['email'];
 echo $email."<br/>";
 $username=$_POST['email'];
 echo $username."<br/>";
 $password=$_POST['password'];
 echo $password."<br/>";
 $weight=$_POST['weight'];
 echo $weight."<br/>";
 $lastdonated=$_POST['last_donated'];
 echo $lastdonated."<br/>";
 $district=$_POST['district'];
 echo $district."<br/>";
 $taluk=$_POST['taluk'];
 echo $taluk."<br/>";
 $residencenumber=$_POST['residencenumber'];
 echo $residencenumber."<br/>";
 $address=$_POST['address'];
 echo $address."<br/>";
 $message="No Message";
 echo $message."<br/>";
 $community="No community"; 
 echo $community."<br/>";
 

//---------------Send Mail to User------------------------------//

$name=$_POST['fullname'];
$emailid=$_POST['email'];
$message="You have succesfully registered.Your User name is ".$username."and Password is ".$password." ";

echo $name;
echo $email;

echo "From :".$name."\r\n"."Message :".$message;

$to = "jinto1729@gmail.com";
$subject  = 'BloodDonorKerala.com';			 
$headers  = 'From: '.$email.'' . "\r\n" .
            'Reply-To: '.$email.'' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();	
			
if($sentmail=mail($to, $subject, $message, $headers) )
    {echo "Email has been sent to your Email ID...<br>";
	 //header("location:index.php");
	}
else 
{echo "Sorry,Email sending failed.Please try again.<br>"; 
} 
 
//--------------------------------------------------------------// 

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");

$query = "insert into user (user_fullname,user_gender,user_dob,user_bloodgroup,user_mobilenumber,
user_email,user_username,user_password,user_weight,user_lastdonated,user_district,user_taluk,
user_residencenumber,user_address,user_message,user_community) values 
('{$fullname}','{$gender}','{$dob}','{$bloodgroup}','{$mobilenumber}','{$email}','{$username}',
'{$password}','{$weight}','{$lastdonated}','{$district}','{$taluk}','{$residencenumber}','{$address}',
'{$message}','{$community}');";

header("location:registration_complete.php");
		 
$result = mysql_query($query,$link); 
				if (!$result) 
				{ echo "Problem with query " ."<br/>"; 
				exit(); 
				} 
mysql_close($link);
?>	