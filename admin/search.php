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
				
				<span style="position: relative;color: #498ea5;font-weight: 700;font-style: normal;font-size: 48px;
			text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Blood Bank Admin Panel</span>
				
			</div><!-- end call --></h2>
			
			<p></p>
			
			</header>
	</div><!-- end header wrap -->

	<div id="container">
	
	
		
      <p> &nbsp;  </p> 
	  
      <p> &nbsp;  </p>
	  
	  
	  <span style="position: relative;color:red;font-weight: 700;font-style: normal;font-size: 30px;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Search Results</span>
	  
	<div  class="form">
    		
			
		<form action="process_search.php" method="post">
			
			<center>
			
       			<input style="color:red; height: 30px; width: 400px;"  type="text" name="search" id="search" placeholder="Enter Keyword">
				<input style="color:red;width:100px;" type="submit" name="user" id="user" value="Search">
			
			</center>
		
		</form>
	   
	  	
              
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