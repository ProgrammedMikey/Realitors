<?php 

function doValidation($firstname, $lastname, $phoneormemail, $city) 
{ 
	$errmsg = ''; 
	
	if(empty($firstname)) 
	{ 
		$errmsg .= "<br />You must enter a First Name";
	} 
	
	if(empty($lastname)) 
	{ 
		$errmsg .= "<br />You must enter a Last Name";
	}
	if (empty($phoneormemail)) 
	{ 
		$errmsg .= "<br />You must enter a phone number or email"; 
	} 
	if ($city == '-') 
	{ 
		$errmsg .= "<br />You must enter a City";
	} 
	
	return $errmsg;
} 
?>

