<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
  
  <html> 
  <head> 
	<title> Argent Real Estate</title> 
	
	<link rel="stylesheet" type="text/css" href="../css/basic.css" /> 
	
</head>  
	 
 <body> 
	   
 <div> 
	<a href="testing.php" border="0">
	<img src="../images/banner.jpg" alt="Argent Real Estate Logo"> 
	</a> 
</div>  

  <div id="featuredhouse"> 
	<h2 style="color:blue;">Featured Home!</h2> 
	<img src="house_images/house_1.jpg" /> 
	<p> <strong>As Far as the Eye Can See!</strong></p> 
	<p> Spectacular Ocean and Canyon views!! <br /> 
	This large estate has a room to entertain with<br /> 
	1200 sq. ft. "ballroom" that features modern<br /> 
	stone wood work, vaulted ceiling and <br /> 
	beautiful bay windows! 
	</div> 
	
	<div id="realtorlist"> 
	<h4 style="color:blue;">Our Realtors</h4> 
<?php  
		include 'common_functions_6.php'; 
		
		displayRealtors(); 
?> 
		
		</div> 
		
	<div id="findhome"> 
	<form method="post" action="homelist_1.php"> 
	<p><strong>Enter City:</strong> 
		<input type="text" name="find_city" size="30" /> <br/> 
		(Leave blank to find all houses listed) 
	</p> 

	<p> 
	<input type="submit" value="Find Homes" /> 
	</p> 
		
 	<p>Note: We represent homes in the following cities: OceanCove, Timsville, Pine Beach </p> 
 
</form> 
</div>  

<div id="endpage"> 
		<a href="http://localhost/guest_calc.php">Guest Book / Mortgage Calculator </a> 
		<br /><br /><br /><br /> 
</div> 		
 
 </body> 
 </html> 
 
 <?php 
 function displayRealtors() 
 { 
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; 
	 
	 $statement = "SELECT firstname, image_file "; 
	 $statement .= "FROM realtor "; 
	 $statement .= "ORDER BY firstname "; 
	
	$sqlResults = selectResults($statement); 
	 
	 $error_or_rows = $sqlResults[0]; 
	 
	 if (substr($error_or_rows, 0, 5) == 'ERROR')
	 { 
		print "<br />Error on DB"; 
		print $error_or_rows;
	 }  else { 
	 
		$arrarSize = $error_or_rows; 
		
		for ($i=1; $i <= $error_or_rows; $i++) 
		{ 
		$firstname = $sqlResults[$i]['firstname']; 
		$image_file = $sqlResults[$i] ['image_file']; 
		
		print "<p><img src='../realtors/".$imagefile."'>"; 
		
		print "<br />".$firstname."</p>\n"; 
		}
	 } 
		
} 
 ?>