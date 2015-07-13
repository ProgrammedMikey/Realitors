<?php
$db = mysqli_connect('localhost', 'root','');

if (!$db)
{ 
	print "<h1>Unable to connect to mysql</h1>";
}
 
$dbname = 'test'; 

$btest = mysqli_select_db($dbname); 

if (!$btest) 
{ 
	print "<h1>Unable to slelect the database</h1>"; 
}

 
?>