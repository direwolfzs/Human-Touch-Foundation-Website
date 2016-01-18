<?

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$walkers = $_POST['walkers'];
$comments = $_POST['comments'];
$security = $_POST['security'];
$newsletter = $_POST['newsletter'];

$to = "haesanq@yahoo.com";
$subject = "New Contact Form Submission";
$message = "A visitor of HumanTouch.com has submitted the following requirements.\n\nName: $name\n\nEmail: $email\n\nTelephone: $phone\n\nPayment: $payment\n\nWalkers/Runners: $walkers\n\nComments: $comments\n\nSecurity: $security\n\nNewsletter: $newsletter\n\nPlease respond to this enquiry within 24 hours.\n\nBest Regards\nHumanTouch.com Web Team";

if ($security=="10") {
	mail($to,$subject,$message);
	header("Location:contact.php?s=1");
}
else{
	header("Location:contact.php?s=2");
}
	

?>