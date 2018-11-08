<?php 
  $name = $_POST['name']; 
  $address = $_POST['address']; 
  $phone = $_POST['phone']; 
  $email = $_POST['email']; 
  $date = $_POST['date']; 
  $insurance = $_POST['insurance']; 
  $message = $_POST['message']; 
  $formcontent="From: $name \n Address: $address \n Phone: $phone \n Email: $email \n Date: $date \n Insurance: $insurance \n Details: $messsage"; 
  $recipient = "stymon@dealerappvantage.com";
  $subject = "Accident Reporting Form"; 
  $mailheader = "From: $email \r\n"; 
  mail ($recipient, $subject, $formcontent, $mailheader) or die ("Error!");
  echo "Thank You! Your request has been sent."
?>
