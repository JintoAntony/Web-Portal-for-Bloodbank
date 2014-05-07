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
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">
	window.onload = function()
	{
		new JsDatePick({useMode:2,target:"requiredon",dateFormat:"%y-%m-%d"});	
	};
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
         		<li><a href="blood_request.php"  class="selected">Blood Request</a></li>
          		<li><a href="search.php">Search</a></li>
              	<li><a href="register.php">Register</a></li>
			    <!--<li><a href="last_donations.php">Last Donations</a></li>-->
                <li><a href="contact.php">Contact</a></li>
				<li><a href="about_blood.php">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    
      
	  
	 
	 
	 
    
    
    <div id="templatemo_main">
    	
      <h2>Blood Request</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h4>Kindly fill this request form below and submit.</h4> <br/>

				
                <form method="post" name="request" id="request" action="process_blood_request.php" enctype="multipart/form-data">
					
					<label for="author">Patient's Name:</label> 
					<input type="text" id="patientname" name="patientname" class="required input_field" required />
					<div class="cleaner h10"></div>
					
					<label for="author">Doctor's Name</label> 
					<input type="text" id="patientdoctor" name="patientdoctor" class="required input_field" required />
					<div class="cleaner h10"></div>
					
					
					<label for="subject">Hospital:</label> 
					<input type="text" class="validate-subject required input_field" name="hospital" id="hospital" required/>				               
					<div class="cleaner h10"></div>
					
					
					<label for="subject">Place:</label> 
					<input type="text" class="validate-subject required input_field" name="place" id="place" required/>				               
					<div class="cleaner h10"></div>
					
					
					<label for="subject">District:</label> 
					<input type="text" class="validate-subject required input_field" name="district" id="district" required/>				               
					<div class="cleaner h10"></div>
					
					
					<label for="subject">Email ID:</label> 
					<input type="text" class="validate-subject required input_field" name="email" id="email" required/>				               
					<div class="cleaner h10"></div>
					
					
				<!--	<label for="email">Required On:</label> 
					<input type="date" name="requiredon" id="requiredon" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div> -->
					
					<label for="email">Required On:</label>
					<input type="text" size="12" name="requiredon" id="requiredon" class="validate-email required input_field" required/>
					<div class="cleaner h10"></div>
					
					
					<label for="subject">Blood Group:</label>
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
					<div class="cleaner h10"></div>
					
					<label for="subject">Contact Person Name:</label> 
					<input type="text" class="validate-subject required input_field" name="contactperson" id="contactperson" required/>				               
					<div class="cleaner h10"></div>
					
					
					
					<label for="subject">Contact Number:</label> 
					<input type="text" class="validate-subject required input_field" name="contactno" id="contactno" required/>				               
					<div class="cleaner h10"></div>
																	
					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
										
				</form>
 

             </div>
			 </div>
             
  
 <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->
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