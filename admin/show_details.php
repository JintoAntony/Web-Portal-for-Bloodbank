
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
	  
	  
	  <span style="position: relative;color: #771F8D;font-weight: 700;font-style: normal;font-size: 30px;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Donors Details</span>
	  
	<div  class="form">
    		
			
		<table width="100%" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="10%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;">Sl No.</td>
         <td width="25%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Name</p></td>
         <td width="15%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Gender</p></td>
		  <td width="25%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Phone No</p></td>
		   <td width="10%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Blood Group</p></td>
		   <td width="15%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Remove</p></td>
       </tr>	
	   
	   
	   <?php
	/*	$rec_limit = 150;		
		if(isset($_GET{'page'} ) )
      {
        $page = $_GET{'page'};
        $offset = $rec_limit * $page ;
      }
       if(!isset($_GET{'page'} ) )
      {
        $page = 1;
        $offset = 100;
      }*/
	  
	 $total = 1;
      
		$link=mysql_connect("localhost","root","root")or die("can not linkect");
        mysql_select_db("bloodbank",$link) or die("can not select database");
				
		/* Count of no.of row*/		
		/*$sql = "SELECT count(user_id) FROM user ";
        $retval = mysql_query( $sql, $link );
		
		if(! $retval )
        {
         die('Could not get data: ' . mysql_error());
        }
        $row = mysql_fetch_array($retval, MYSQL_NUM );
        $rec_count = $row[0];		
		$left_rec = $rec_count - ($page * $rec_limit);		
		/* Count*/
		
		$query = "SELECT * FROM user"; //LIMIT $offset,$rec_limit "; 
		$result = mysql_query($query,$link) or die("wrong query");
	
		while(($row = mysql_fetch_array($result)))
      {
			echo '<tr><td><span style="font-size:15px">'.$total.')</td></span>';
			echo '<td><span style="font-size:15px;">'.$row['user_fullname'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['user_gender'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['user_mobilenumber'].'</span> </td>';
			echo '<td><span style="font-size:15px;">'.$row['user_bloodgroup'].'</span> </td>';
			echo '<td style="align:center">
			<a href="process_user_delete.php?id='.$row['user_id'].'">
			<input type="button" style="width:75px;margin-top:3px;background-color:white;border:1px solid rgba(201, 33, 60, 0.62);" value="Delete" name="user_delete" id="user_delete" /></a>
			</td></tr>';
			$total=$total+1;
		
	  }
			   
	/* if( $left_rec < $rec_limit )
     {
       $last = $page - 1;
       echo '<a href=\"$_PHP_SELF?page=$last\">Last 50 Records</a>';
     }  
      

	  else if( $page == 1)
     {
       $page=$page+1;
	   echo '<a href=\"$_PHP_SELF?page=$page\">Next 50 Records</a>';
     }
      
	  else if( $page > 1 )
     {
       $last = $page - 1;
	   $page = $page + 1;
       echo '<a href=\"$_PHP_SELF?page=$last\">Last 50 Records</a> |';
       echo '<a href=\"$_PHP_SELF?page=$page\">Next 50 Records</a>';
     }  
		
	   echo '<p></p>';
	   echo '<p></p>';
	   echo '<p></p>';
	   echo '<p></p>';
      /* echo '<span style="font-size:16px;color:red;"><br/>Total Number of Participants:'.$rec_count.'</span>';*/
		
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