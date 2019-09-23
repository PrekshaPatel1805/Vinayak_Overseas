<?php
 $name = $_POST['Name'];
 $email = $_POST['Email'];
 $telephone = $_POST['Telephone'];
 $msg = $_POST['Message'];
 $place = $_POST['Place'];
 $ckin = $_POST['CheckIn'];
 $ckout = $_POST['CheckOut'];
 $adults = $_POST['Adults'];
 $child = $_POST['Child'];
 $rooms = $_POST['Rooms'];
 $category = $_POST['Category'];
$to      = 'prekshapatel81@gmail.com';
$subject = 'Mail from '.$email;
$message = "Name : ". $name . "\nTelephone : ".$telephone."\nMessage : ".$msg."\nPlace : ".$place."\nCheck In : ".$ckin."\nCheck Out : ".$ckout."\nAdults : ".$adults."\nChild : ".$child;
$message .= "\n\tAge of each child : ";
for($i = 0;$i < (int)$child;$i++){
 	$x = "mytext".$i;
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