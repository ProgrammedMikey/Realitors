<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
  
  <html> 
 <head> 
	<title> GuestBook</title> 
	<link rel="stylesheet" type="text.css" href="css/basic.css" />
</head>  
	
<body>  
 
 <div> 
	<a href="project.php" border="0">
	<img src="images/realEstate.jpg" alt="Argent Real Estate Logo"> 
	</a>
</div>
	  
<div> 

	<h2>View GuestBook</h2> 
	
	<table border='1'> 
	<tr> 
		<th>Last Name</th>
		<th>First Name</th> 
		<th>Contact Choice</th> 
		<th>Phone or Email</th> 
		<th>City Choice</th> 
		<th>Contact Date</th> 
		<th>Comments</th> 
	</tr>  
	
	<?php 
	  
	  //Read Guestbook info from file into html

	$display = ""; 
	$line_ctr = 0; 
	
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; 
	$filename = $DOCUMENT_ROOT.'data/'.'guestbook.txt'; 
	
	if (file_exists($filename)) 
	{ 
		$fp = fopen($filename, 'r');    //opens file for reading 
		
		while(true) 
		{ 
			$line = fgets($fp); 
			
			if(feof($fp)) 
			{ 
				break; 
			} 
			$line_ctr++; 
			
			$line_ctr_remainder = $line_ctr % 2; 
			
			if ($line_ctr_remainder == 0) 
			{ 
				$style = "style='background-color: #FFFFCC;'";
			} else { 
				  $style = "style='background-color: while;'";
			}
			 
			 list($lastname, $firstname, $contactchoice, $phoneormemail, $city, $contact_date, $comments) = explode('|', $line);
		
		$display .="<tr $style>"; 
			$display .="<td>".$lastname."</td>"; 
			$display .="<td>".$firstname."</td>"; 
			$display .="<td>".$contactchoice."</td>";
			$display .="<td>".$phoneormemail."</td>";
			$display .="<td>".$city."</td>";
			$display .="<td>".$contact_date."</td>";
			
		if (empty($comments)) 
		{ 
			$comments = '&nbsp;'; 
		}	
		$display .="<td>".$comments."</td>"; 
		$display .="</tr>\n";   //new line
		
}
		fclose($fp ); 
		print $display;
}	 
else 
{ 
	print "<p>There are no names in the Guestbook</p>";
}	
?>  
</table> 
</div>
	</body> 
	</html>