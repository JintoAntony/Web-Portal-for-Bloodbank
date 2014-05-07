<?php

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blood Bank Admin Panel</title>
  <link rel="stylesheet" href="css/style_admin.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
	
</head>
<body style="background:url(images/bg.png) repeat;">
	<div id="header-wrap">
		<header class="group">			
			<h2>
			<div id="call" >				
			<span style="position: relative;color:red;font-weight: 700;font-style: normal;font-size: 48px;
			text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Blood Bank Admin Panel</span>				
			</div><!-- end call --></h2>			
			<p></p>			
			</header>
	  </div><!-- end header wrap -->
	  <div id="container">		
      <p> &nbsp;  </p> 	  
      <p> &nbsp;  </p>	  
<span style="position: relative;color: #771F8D;font-weight: 700;font-style: normal;font-size: 30px;	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Blood Requests</span>
	  
	<div  class="form">			
	<table width="100%" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="10%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;">Sl No.</td>
         <td width="22%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Patient's Name</p></td>
         <td width="22%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Hospital</p></td>
		 <td width="10%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Blood Group</p></td>
		 <td width="15%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Contact No.</p></td>
         <td width="20%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Required On</p></td>       
	   </tr>	
	   
	   
<?php	  
	    $total = 1;     
		$link=mysql_connect("localhost","root","root")or die("can not linkect");
        mysql_select_db("bloodbank",$link) or die("can not select database");
						
		$query = "SELECT * FROM blood_request"; //LIMIT $offset,$rec_limit "; 
		$result = mysql_query($query,$link) or die("wrong query");
	
		while(($row = mysql_fetch_array($result)))
      {
			echo '<tr><td><span style="font-size:15px">'.$total.')</td></span>';
			echo '<td><span style="font-size:15px;">'.$row['request_patientname'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['request_hospital'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['request_bloodgroup'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['request_contactno'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['request_requiredon'].'</span> </td></tr>';
			$total=$total+1;
		
	  }
			   	
	?>	   
				  
		
	</table>		
              
    </div>				
	
	<p></p>
	<p></p>
	
</div> <!--! end container -->
	
<a href="admin_home.php"> <span style="font-size:18px; color:black;">Back to Home Page</span> </a>	
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>