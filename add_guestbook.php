<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
  
  <html> 
 <head> 
	<title> Thank You</title> 
	<link rel="stylesheet" type="text.css" href="css/basic.css" />
	
</head>  
	
<body>  
<div> 
	<a href="project.php" border="0">
	<img src="images/realEstate.jpg" alt="Argent Real Estate Logo"> 
	</a>
</div>
	  
<div id="guest">	  
<?php 
	 //Gather Data from Form 
	 
	 $firstname = $_POST['firstname'];  
	 
	 $lastname = $_POST['lastname']; 
	 
	 $contactchoice = $_POST['contact']; 
	 
	 $phoneormemail = $_POST['phoneormemail']; 
	 
	 $city = $_POST['city']; 
     $comments = $_POST['comments']; 
	   
	   //Validate Entries 
	   
include "common_function.php"; 
	  
$rtnmsg = doValidation($firstname, $lastname, $phoneormemail, $city); 

if ($rtnmsg == '') 
{ 
	//skip
}	
else 
{ 
	print $rtnmsg; 
	print "<br /><br />Go Back and try again!"; 
	"</body></html>"; 
	exit;
}	
	  //add guestbook information into file
	  
	  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; 
	  
	  $filename = $DOCUMENT_ROOT.'data/'.'guestbook.txt'; 
	  
	  $fp = fopen($filename, 'a');  //opens the file for appending
			
		$contact_date = date('Y-m-d'); 
		
		$output_line = $lastname.'|'.$firstname.'|'.$contactchoice.'|'.$phoneormemail.'|'.$city.'|'.$contact_date.'|'.$comments.'|'."\n"; 
        
		fwrite($fp, $output_line); 
		
		fclose($fp );
		
		 //Display New Page 
	  
	  $fullname = $firstname.' '.$lastname; 
	  
	print "<p class='topofdiv'>Thank You! A representative will contact you soon </p>";
	
	print "<p>Information Submitted for: $fullname </p>";
	
	print"<p>Your $contactchoice is $phoneormemail <br />"; 
	print"and you are interested in living in $city </p>"; 

	print"<p>Our representive will review your comments below:</p>"; 
		
	print "<textarea cols='60' rows='5' disabled='disabled' class='textdisabled'>"; 
	print $comments; 
	print "</textarea>";
?> 
	</body> 
	</html>