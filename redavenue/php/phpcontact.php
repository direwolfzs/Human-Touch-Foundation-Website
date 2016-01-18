<?php
/* Subject and Email Variables */
	
    $emailSubject = 'Crazy PHP Scripting!';
    $webMaster = 'haesanq@yahoo.com';

/* Gathering Data Variables */

	$emailField = $_POST['email'];
    $nameField = $_POST['name'];
    $phoneField = $_POST['phone'];
    $budgetField = $_POST['budget'];
    $walkersField = $_POST['walkers'];
    $commentsField = $_POST['comments'];
    $newsletterFied = $_POST['newsletter'];
	

    $body = <<<EOD
<br><hr><br>
Email: $emailField <br>
Name: $nameField <br>
Phone Number: $phoneField <br>
Budget: $budgetField <br>
Number of Walkers/Runners: $walkersField <br>
Comments: $commentsField <br>
Newsletter: $newsletterField <br>
EOD;

	$headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
    
/* Results rendered as HTML*/

	$theResults = <<<EOD
<html>
<head>
<title>Human Touch - Registration </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

body {
	background-color: #f1f1f1;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	color: #666666;
	text-decoration: none;
	
}

</style>

</head>

<div>
<div align="left"> Thanky you for your interest! Your email will be answeered very soon! </div>
</div>
</body>
</html>

EOD;
echo "$theResults";
?>