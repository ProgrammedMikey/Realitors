<?php 

function doValidation($firstname, $lastname, $phoneormemail, $city) 
{ 
	$errmsg = ''; 
	
	if(empty($firstname)) 
	{ 
		$errmsg .= "<br />You must enter a First Name";
	} 
	
	if(empty($lastlame)) 
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
function connectDatabase()
{ 
$db = mysqli_connect('localhost', 'root', ''); 

if (!$db) 
{ 
	print "<h1>Unable to connect to MYSQL</h1>"; 
}	 
$dbname - 'test'; 

$btest = mysqli_select_db($dbname); 

if (!$btest) 
{ 
	print "<h1>Unable to select the database</h1>"; 
} 
return $db; 
}
  function selectResults($statement) 
  { 
	$output = ""; 
	$outputArray = array(); 
	
	$db = connectDatabase(); 
	
	if ($db) 
	{ 
		$results = mysqli_query($statement); 
		
		if (!$result) { 
			$output .= "ERROR"; 
			$output .= "<br /><font color=red>MySQL NO: ".mysqli_errno(); 
			$output .= "<br />MySQL Error: ".mysqli_error(); 
			$output .= "<br />SQL Statement: ".$statement; 
			$output .= "<br />MySQL affected rows: ".mysqli_affected_rows()."</font><br />"; 
			 
			 array_push($outputArray, $output); 
		} else { 

			$numresults = mysqli_num_rows($result); 
			
			array_push($outputArray, $numresults); 
			
			for ($i = 0; $i < $numresults; $i++) 
			{ 
				$row = mysqli_fetch_array($result); 
				
				array_push($outputArray, $row); 
			}
		}
		} else { 
			array_push($outputArray, 'ERROR-No DB Connection'); 
			
		} 
		return $outputArray;
	}
?> 

