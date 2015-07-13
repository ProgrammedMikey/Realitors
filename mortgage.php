<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
  
  <html> 
 <head> 
	<title> Mortgage Calculation</title> 
	<link rel="stylesheet" type="text/css" href="css/basic.css" /> 	
</head>  
	
<body>   
<div>
	<a href="project.php" border="0">
	<img src="images/realEstate.jpg" alt="Argent Real Estate Logo"> 
	</a> 
</div>
	 
	 <?php 
	 //Gather Data from Form 
	 
	 $amountfinanced = $_POST['amountfinanced']; 
	 $interestrate = $_POST['interestrate']; 
	 //Validations
	 
	 $msg = " "; 
	 $error_cnt = 0; 
	 
	 if (empty($amountfinanced)) 
	 { 
		$msg .= "<br><span class='errormsg'>Please enter an amount </span>";
		$error_cnt++;
	 } else { 
		if (!is_numeric($amountfinanced))
		 { 
			$msg .="<br><span class='errormsg'>Amount entered, '".$amountfinanced."' is not numeric </span>"; 
			$error_cnt++;
		 } 
	 } 
	
	if (empty($interestrate)) 
	{ 
		$msg .= "<br><span class='errormsg'>Please enter an interest rate </span>";
		$error_cnt++;
	} else { 
			if (!is_numeric($interestrate))
			{ 
				$msg .= "<br><span class='errormsg'>Interest rate entered, '".$interestrate."' is not correct </span>";
				$error_cnt++;
			}
	} 
	
//Calculations 

$interestrate_forcalc = $interestrate / 100 ;	

$monthy_payment = ($amountfinanced * $interestrate_forcalc) / 12; 

$monthy_payment_formatted = number_format($monthy_payment, 2);	 
	 
	 //Display new page 
	 
?> 
 
 <div id="mortgageresults">
<?php 

	if ($error_cnt > 0) 
	{  
		print "$msg";
	} else { 
		print "<p class='topofdiv'>Mortgage Calculation</p>"; 
		print "<p>If you finance $".$amountfinanced." at an interest rate of ".$interestrate."%</p>"; 
		print "<p>Your Monthly Payment would be $".$monthy_payment_formatted."</p>"; 
			} 
 ?>  
 </div>
 
 
 
 
 
	</body> 
	</html>
		