<?php

 $email = $_POST['Email1'];
 $name = $_POST['Name1'];
 $telephone = $_POST['Telephone1'];
 $msg = $_POST['Message1'];
 $place = $_POST['Place1'];
 $ckin = $_POST['CheckIn1'];
 $ckout = $_POST['CheckOut1'];
 $adults = $_POST['Adults1'];
 $child = $_POST['Child1'];
 $rooms = $_POST['Rooms1'];
 $category = $_POST['Category1'];
$to      = 'prekshapatel81@gmail.com';
$subject = 'Mail from '.$email;
$message = "Name : ". $name . "\nTelephone : ".$telephone."\nMessage : ".$msg."\nPlace : ".$place."\nCheck In : ".$ckin."\nCheck Out : ".$ckout."\nAdults : ".$adults."\nChild : ".$child;
$message .= "\n\tAge of each child : ";
for($i = 0;$i < (int)$child;$i++){
 	$x = "mytext1".$i;
 	$message .= $_POST[$x]." , ";
 }
$message .= "\nRooms : ".$rooms."\nCategory : ".$category;
$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
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