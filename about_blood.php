<?php session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
              	<li><a href="register.php">Register</a></li>
			    <!--<li><a href="last_donations.php">Last Donations</a></li>-->
                <li><a href="contact.php">Contact</a></li>
				<li><a href="about_blood.php"  class="selected">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
	
	
    <div id="templatemo_main">
    	
        <div id="templatemo_content">
			<div class="col_fw">
                <h1>About Blood</h1>
                <div class="image_frame_300 image_fl"><span></span><img src="images/donor1.jpg" alt="Image 01" /></div>
               <span style="color:red;font-size:16px"> What is blood?</span> <br/> <br/>
                <p align="justify">Blood is the red coloured fluid that flows continuously in a human being's circulatory system. Blood comprises more than 8% of the body weight of a healthy individual. On an average, every adult person has about 5 - 6 litres of blood. 
                The major component of blood is a fluid called plasma in which are suspended cellular elements. These are Red Blood Cells or RBC's, White Blood Cells or WBC's and tiny platelets.</p>
				
				<br/><br/>

				<span style="color:red;font-size:16px"> Blood components, and what they do? </span> <br/> <br/>
                <p align="justify">
				
				Plasma acts as a vehicle to carry many substances like glucose, fats, and proteins, enzymes, and hormones etc., in addition to the blood cells </p>

				<p align="justify">
				Plasma has protein components called albumin, globulin and fibrinogen. Broadly speaking, albumin maintains the 
				structural balance of blood, globulin builds resistance to bacterial infections, fibrinogen helps blood 
				coagulate.</p>
				
				
				<p align="justify">
				
				Red Cells carry oxygen from the lungs to various body tissues and take back carbon dioxide from the cells and 
				tissues which the body gets rid of as exhaled air.The basic substance of red cells is iron and protein, known 
				as haemoglobin. The haemoglobin count is an indicator of the health of blood. On an average, a healthy male 
				should have 14 - 16 gm per 100 millilitre and in a female around 12 - 14 gm per 100 millilitre.
				</p>
				
				<p align="justify">
				
				White cells act mainly as body scavengers and guards. They help in the immune system of the body and act as 
				defense forces of the body, killing bacteria or any other organisms entering the body. Platelets help in the 
				clotting and coagulation of blood. They also repair the tiny blood vessels in the body which crack under 
				pressure, thereby preventing haemorrhages under the skin. </p>
				
				
				
                
            </div>
			</div>
			
			
			<div id="templatemo_content1">
			<div class="col_fw">
                <span style="color:red;font-size:16px"> The importance of blood donation </span> <br/> <br/>
                <p align="justify">The body’s functioning can only be normalized with more human blood in cases where 
				substantial loss of blood has occurred due to accidents or surgery. But spare blood can only be preserved for 
				a maximum of 35 days. Therefore voluntary blood donation becomes essential. A person is also compelled to 
				receive blood donation in instances of excessive bleeding during delivery, platelet reducing diseases like the 
				dengue fever, blood cancer and general deficiency of blood.</p>
				
				<br/><br/>

				<span style="color:red;font-size:16px"> Are there any bad effects in donating blood?</span> <br/> <br/>
                

				<p align="justify">
				Blood donation is a completely safe activity. One need not fear anything when donating blood through blood 
				banks approved by the government. Since the body soon makes up for the donated blood the donor does not feel 
				any fatigue or other illness. In fact, blood donation encourages the body to produce new blood components fast.
				Only completely sterilized, germ-free needles are to be used for bleed. The donor need only rest for a short 
				period and a light snack.</p>
				
				
		</div>
		</div> <!-- end of content -->
        
<div class="cleaner"></div>
</div> <!-- end of main -->
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2013 <a href="#">spiderguts</a> | 
        Designed by <a href="http://www.spidreguts.com" rel="nofollow" target="_parent">spiderguts</a>
        <div class="cleaner"></div>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>