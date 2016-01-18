<?php

/* Email Variables */
$emailSubject = 'registration!'; /*Make sure this matches the name of your file*/
$webMaster = 'haesanq@yahoo.com';

/*design by Mark Leroy @ http://www.helpvid.net*/

/* Data Variables */
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$walkers = $_POST['walkers'];
$comments = $_POST['comments'];
$newsletter = $_POST['newsletter'];


$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Payment: $payment <br>
Walkers: $walkers <br>
Comments: $comments <br>
Newsletter: $newsletter <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="3;URL=http://YOUR WEBSITE ADDRESS/contact.html">
<style type="text/css">
<!--
body {
background-color: #444; /* You can edit this CSS to match your website*/
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #fec001;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}
-->
</style>
</head>
<div align="center">Thank you for your interest! Your email will be answered very soon! </div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>