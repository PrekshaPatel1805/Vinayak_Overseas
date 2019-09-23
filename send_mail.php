<?php
echo "In Send_mail.php    ";
 $Address = $_POST['Address'];
 $email = $_POST['Email'];
 $Merchant_Email = $_POST['Merchant_Email'];
 $ServiceId = $_POST['ServiceId'];
//$to      = $email;
 $to      = 'tanhapatel26@gmail.com';
$subject = 'Mail from '.'tanhapatel26@gmail.com';
$message = "Address : ". $Address . "\nServiceId : ".$ServiceId."\nMerchant_Email : ".$Merchant_Email;
$headers = 'From: '. 'tanhapatel26@gmail.com' . "\r\n" .
    'Reply-To: '. 'tanhapatel26@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$x = mail($to, $subject, $message, $headers);
if(($x == 1) || ($x == true))
{
	echo "Mail has been sent successfully";	
}
else
{
	echo "Mail has not been sent..please try again later";	
}
?> 