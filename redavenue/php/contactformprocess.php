<?php

 /*
 * @Web Contact Page PHP Script
 * @author helpvid@ymail.com - http://www.helpvid.net
 * @version 1.0.0
 * @date January  05, 2010
 * @category Helpvid PHP Script for Contact page
 * @copyright (c) 2010 @helpvid.net (www.helpvid.net)
 * @Creative Commons Attribution-No Derivative Works 2.0 UK: England & Wales License.
 * @Creative Commons Attribution-No Derivative Works 2.5 UK: SCOTLAND License.
 * @Creative Commons Attribution-No Derivative Works 3.0 United States License.
 */


/* Email Variables */
$emailSubject = 'contactformprocess!'; /*Make sure this matches the name of your file*/
$webMaster = 'YOUR EMAIL ADDRESS WILL GO HERE';

/*design by Mark Leroy @ http://www.helpvid.net*/

/* Data Variables */
$email = $_POST['email'];
$name = $_POST['name'];
$comments = $_POST['comments'];



$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Comments: $comments <br>
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
<div align="center">Put your message in here letting the sender know the message has been successfully sent</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>