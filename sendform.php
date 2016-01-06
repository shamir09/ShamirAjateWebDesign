<?php

	$fname = $_POST["fname"]; 
    $email = $_POST["email"]; 
	$body = $_POST["body"];
		


// Enter your email address

$to ="shamirajate@gmail.com";


$send_contact = mail($to,$fname,$email,$body);

// Check, if message sent to your email 
// display message "Thank you, We've received your information"
// else inform client there was an error
if($send_contact){
echo "Thank you, We've received your contact information";
}
else {
echo "Please go back and resubmit the form, it seems there was an error";
}
?>