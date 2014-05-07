<?php session_start();
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

<body id="sub_page">
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
		     <h1><a href="http://www.spidreguts.com" rel="nofollow">Blood bank</a></h1>
	    </div> 
        
		<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php">Home</a></li>
         		<li><a href="blood_request.php">Blood Request</a></li>
          		<li><a href="search.php"  class="selected">Search</a></li>
              	<li><a href="register.php">Register</a></li>
			    <!--<li><a href="last_donations.php">Last Donations</a></li>-->
                <li><a href="contact.php">Contact</a></li>
				<li><a href="about_blood.php">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
	
	<br/><br/><br/>
	
    <div id="templatemo_main">
    	
      <h2>Enter Details</h2>
        <div class="col_w630 float_l">
        	
             <div id="search_form">
        
               <form method="post" name="search" id="search" action="process_search.php" enctype="multipart/form-data">
					
					<label for="subject">Select Blood Group:</label>
					<select id="bloodgroup" name="bloodgroup" class="validate-subject required input_field" required>
					<option value="" selected="selected">--Select--</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+ ">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					</select>
					<div class="cleaner h10"></div><br/>
					
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="email">Select Gender:</label>
                    <input type="radio" name="gender" value="Male" required>Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female"> Female					 
		            <div class="cleaner h10"></div> <br/>	
					
        
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="subject">Select District:</label>
					<select id="district" name="district" class="validate-subject required input_field">
					<option value="" selected="selected">--Select--</option>
					<option value="Alappuzha">Alappuzha</option>
					<option value="Eranakulam ">Eranakulam </option>
					<option value="Idukki">Idukki</option>
					<option value="Kannur">Kannur</option>
					<option value="Kasaragod ">Kasaragod </option>
					<option value="Kollam">Kollam</option>
					<option value="Kottayam">Kottayam</option>
					<option value="Kozhikode">Kozhikode</option>
					<option value="Malappuram">Malappuram</option>
					<option value="Palakkad">Palakkad</option>
					<option value="Pathanamthitta">Pathanamthitta</option>
					<option value="Thiruvananthapuram ">Thiruvananthapuram </option>
					<option value="Thrissur">Thrissur</option>
					<option value="Wayanad">Wayanad</option>
					</select>
					<div class="cleaner h10"></div><br/><br/>
					
					<style="align:center"><input type="submit" value="Search" id="submit" name="submit" class="submit_btn float_l" /></style>
					
										
				</form>
 

             </div>
			 </div>
             
  
 <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->

<br/><br/><br/><br/><br/>


<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2013 <a href="#">spiderguts</a> | 
        Designed by <a href="http://www.spidreguts.com" rel="nofollow" target="_parent">spiderguts</a>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>