<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />



<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<script type="text/javascript">

function validateForm()
{

if(document.register.password.value != document.register.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.register.confirmpassword.focus();     
return false;
} 

}
  
</script>  
  
</head>

<body id="home">
<div id="templatemo_wrapper">
	<div id="templatemo_top"> 
    	<div id="templatemo_login">
            <?php 
include('includes/top.inc.php');
?>
		</div> 
    </div> <!-- end of top -->
    
  	<div id="templatemo_header">
    	
		<div id="site_title">
		     <h1><a href="http://www.templatemo.com" rel="nofollow">Free CSS Templates</a></h1>
	    </div> 
        
		<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php">Home</a></li>
         		<li><a href="blood_request.php">Blood Request</a></li>
          		<li><a href="search.php">Search</a></li>
              	<li><a href="register.php">Register</a></li>
			    <li><a href="last_donations.php" class="selected">Last Donations</a></li>
                <li><a href="contact.php">Contact</a></li>
				<li><a href="about_blood.php">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->

<div id="templatemo_main" align="center">


<table width="60%" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="20%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Donour Name</p></td>
         <td width="10%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Blood Group</p></td>
         <td width="20%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Contact Number</p></td>
		 <td width="15%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Donated On</p></td>
	   </tr>


<?php
 
$today=date("y-m-d");
 
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "select user_fullname,user_lastdonated,user_bloodgroup,user_mobilenumber from user ";
//where (user_lastdonated <   )";
$result = mysql_query($query,$link);
if($result)
{ 
    if(mysql_affected_rows($link)!=0)
	{
          while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		  {  
			 echo '<tr><td><span style="font-size:14px">'.$row['user_fullname'].'</span></td>';
			 echo '<td><span style="font-size:14px;">'.$row['user_bloodgroup'].'</span> </td>';
			 echo '<td><span style="font-size:14px;">'.$row['user_mobilenumber'].'</span> </td>';
			 echo '<td><span style="font-size:14px;">'.$row['user_lastdonated'].'</span> </td></tr/>';           
		}
    }	
else 
echo "No Results ";
}
mysql_close($link);
?>


</table>


</div><!-- end of wrapper -->

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<div class="cleaner"></div>
    </div> <!-- end of main --> 
	
	<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2013 <a href="#">spiderguts</a> | 
        Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">spiderguts</a>
        <div class="cleaner"></div>
    </div>
</div> 

<script type='text/javascript' src='js/logging.js'></script>

</body>
</html>	