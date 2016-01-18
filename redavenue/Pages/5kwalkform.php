<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$payment = $_POST['payment'];
	$walkers = $_POST['walkers'];
	$comments = $_POST['comments'];
	$newsletter = $_POST['newsletter'];
	$reset = $_POST['reset'];
	$submit = $_POST['submit'];
    $from = 'From: Human Touch'; 
    $to = 'haesanq@yahoo.com'; 
    $subject = 'Human Touch';
    $security = $_POST['security'];
			
    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Payment: $payment\n Walkers: $walkers\n Comments: $comments\n Newsletter: $newsletter\n       Comments:\n $comments";
				
    if ($_POST['submit'] && $security == '10') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $security != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>1