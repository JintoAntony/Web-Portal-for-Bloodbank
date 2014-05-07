<?php 
if((!isset($_SESSION['user']) ) )
    {  
	echo '	
	<form action="process_login.php" method="post" name="login" id="login">
    <input type="text" placeholder="Email ID" name="username" size="10" id="username" title="Username" class="txt_field" />
    <input type="password" placeholder="Password" name="password" size="10" id="password" title="Password" class="txt_field" />
    <input type="submit" name="search" value="" alt="Search" id="search" title="Search" class="sub_btn"  />
    </form>
	';		
	}
if(isset($_SESSION['user']))
{
/*$dbc = @mysqli_connect('localhost','root','root','domainpool');
//if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }
//$id=$_SESSION['user_id'];
//$query = "select user_fname from user where user_id=$id ";     
//$result = mysqli_query($dbc,$query);
//if($result)
//{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {		  $name=$row['user_fname'];
		  }
}
*/
$name=$_SESSION['fullname'];
echo '	<a href="#"><span style="color:white"> Welcome '.$name.'</a></span> 
		<a href="update_details.php"> Settings</a>
        <a href="logout.php"><u>  Logout</u></a>	
	 ';		
//mysql_close($dbc);
	}
?>

