<?

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$enquiry = $_POST['enquiry'];
$security = $_POST['security'];

$to = "haesanq@yahoo.com";
$suject = "New Contact Form Submission";
$message = "A visitor of exampledomain.com has submitted the following requirements.\n\nName: $name\n\nEmail: $email\n\nTelephone: $tel\n\nEnquiry: $enquiry\n\nPlease respond to this enquiry within 24 hours.\n\nBest Regards\nExampleDomain.com Web Team";

if ($security=="10") {
	mail($to,$suject,$message);
	header("Location:contact.php?s=1");
}
else { 
	header("Location:contact.php?s=2");
}
?>