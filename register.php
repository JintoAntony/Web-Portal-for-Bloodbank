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
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

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



<script type="text/javascript">
	window.onload = function()
	{
		new JsDatePick({useMode:2,target:"last_donated",dateFormat:"%d-%M-%Y"});	
		new JsDatePick({useMode:2,target:"dob",dateFormat:"%d-%M-%Y"});
	};
</script>


<script type="text/javascript">
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}


 function onlyNumbers(event) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
        return true;
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
          		<li><a href="search.php">Search</a></li>
              	<li><a href="register.php" class="selected">Register</a></li>
			    <!--<li><a href="last_donations.php">Last Donations</a></li>-->
                <li><a href="contact.php">Contact</a></li>
				<li><a href="about_blood.php">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
   
    
    <div id="templatemo_main">
    	
      <h2>Register</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h4>Enter your Details</h4> <br/>
				
				<span style="font-size:16px;color:red;">* All fields are mandatory</span> <br/><br/>				

				
                <form method="post" name="register" id="register" action="process_register.php" onsubmit="return validateForm();" enctype="multipart/form-data">
					
					<label for="author">Full Name:</label> 
					<input type="text" id="fullname" name="fullname" class="required input_field" required />
					<div class="cleaner h10"></div>
					
					<label for="email">Gender:</label>
                    <input type="radio" name="gender" value="Male" required>Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female"> Female					 
		            <div class="cleaner h10"></div> 	

                 <!--   <label for="email">Date of Birth:</label> 
					<input type="date" name="dob" id="dob" value="' . date('d-m-y') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div>		-->
					
					<label for="email">Date of Birth:</label>
					<input type="text" size="12" id="dob" name="dob" class="validate-email required input_field" required/>
					<div class="cleaner h10"></div>						
<?php     
//	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
echo '
';	  
?>													
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

                    <label for="subject">Contact Number:</label> 
					<input type="text" class="validate-subject required input_field" name="mobilenumber" id="mobilenumber" onkeypress="return onlyNumbers(event);" maxlength="15" required/>				               
					<div class="cleaner h10"></div>

					
					<label for="email">Email:</label> 
					<input type="email" class="validate-email required input_field" name="email" id="email" required/>
					<div class="cleaner h10"></div>
					
<!--			    <label for="subject">Username:</label> 
					<input type="text" class="validate-subject required input_field" name="username" id="username" required/>				               
					<div class="cleaner h10"></div>  -->
					
					<label for="email">Password:</label> 
					<input type="password" class="validate-email required input_field" name="password" id="password" required/>
					<div class="cleaner h10"></div>
					
					<label for="email">Confirm Password:</label> 
					<input type="password" class="validate-email required input_field" name="confirmpassword" id="confirmpassword" required/>
					<div class="cleaner h10"></div>
					
					<label for="subject">Weight:</label> 
					<input type="text" class="weight" name="weight" id="weight" onkeypress="return onlyNumbers(event);" maxlength="3" required/>&nbsp;&nbsp;<span style="font-size:14px;color:black;">Kg</span>				               
					<div class="cleaner h10"></div>
					
				<!--	<label for="email">Last Donated:</label> 
					<input type="date" name="last_donated" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div> -->
					
					<label for="email">Last Donated:</label>
					<input type="text" size="12" id="last_donated" name="last_donated" class="validate-email required input_field" required/>
					<div class="cleaner h10"></div>	
					
					
					
					
					
					
					
					
					
					<label for="subject">District:</label>
					<select id="district" name="district" class="validate-subject required input_field" required>
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
					<div class="cleaner h10"></div>
					
					<label for="subject">Taluk:</label> 
					<input type="text" class="validate-subject required input_field" name="taluk" id="taluk" required/>				               
					<div class="cleaner h10"></div>
					
					<label for="subject">Residence Number:</label> 
					<input type="text" class="validate-subject required input_field" name="residencenumber" id="residencenumber" required/>				               
					<div class="cleaner h10"></div>
					
					<label for="text">Address:</label> 
					<textarea id="text" name="address" id="address" rows="0" cols="0" class="required"></textarea>
					<div class="cleaner h10"></div>
					
<!--				<label for="text">Message:</label> 
					<input type="text" class="validate-subject required input_field" name="message" id="message" required/>	
					<div class="cleaner h10"></div>
					
					<label for="subject">Community:</label> 
					<input type="text" class="validate-subject required input_field" name="community" id="community" required/>				               
					<div class="cleaner h10"></div>  -->
					
					
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