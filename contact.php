<?php
if ($_POST["submit"]) {
  $recipient="stymon@dealerappvantage.com";
  $subject="Accident Reporting Form message";
  $sender=$_POST["sender"];
  $senderEmail=$_POST["senderEmail"];
  $message=$_POST["message"];

  $mailBody="Name: $sender\nEmail": $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank You! Your message has been sent.</p>
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <title>Accident Reporting Form</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Custom styles for this template go here -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="csn-image">
      <img src="img/CSNFinal.jpg" class="header-image">
    </div><!-- end header -->
    <div class="contaniner request-form">
      <form method="post" action="contact.php">
        <div class="form-inline">

          <div class="form-group">
            <label id="name" for="name">Full Name*</label>
            <input class="form-control name-box" type="textBox" id="sender" placeholder="Full Name">
            <p id="visible-contact"></p>
          </div><!-- end name -->

          <div class="form-group form-inline">
            <label id="address" for="address">Address*</label>
            <input class="form-control number-box" type="text" required="required" name="address" placeholder="Address">
            <p id="visible-address"></p>
          </div><!-- end address -->

          <div class="form-group form-inline">
            <label id="phone-number" for="number">Phone Number*</label>
            <input class="form-control number-box" type="tel" minlength="9" required="required" id="number" name="phone" placeholder="Phone Number">
            <p id="visible-number"></p>
          </div><!-- end phone number -->

          <div class="form-group form-inline">
            <label id="box-name" for="email">Email*</label>
            <input class="form-control email-box" type="email" id="email" name="senderEmail" placeholder="Email Address" required="required">
            <p id="visible-email"></p>
          </div><!-- end email -->

          <div class="form-group form-inline">
            <label id="date" for="date">Date of Accident*</label>
            <input class="form-control number-box" required="required" type="date" name="date" placeholder="Date of Accident">
          </div><!-- end date of accident -->

          <div class="form-group form-inline">
            <label id="insurance" for="text">Name of Insurance Company and/or Broker*</label>
            <input class="form-control number-box" required="required" type="text" name="insurance" placeholder="Name of Insurance Company and/or Broker">
          </div><!-- end insurance -->

          <div class="form-group form-inline">
            <label id="details" for="text">Details*</label>
            <textarea class="form-control number-box details-box" required="required" name="message" placeholder="Details of the Accident"></textarea>
          </div><!-- end details -->

          <button type="submit" id="button" name="submit" class="btn btn-primary btn-md">Submit &raquo;</button>
        </div><!-- end inline -->
      </form>
      <div class="bottom">
        <img src="img/csnlogo.png" class="bottom-image">
      </div><!-- end bottom -->
    </div>

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>

  </body>
</html>