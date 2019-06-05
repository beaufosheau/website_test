<?php
if($_POST["submit"]) {
  $recipient="beau@murraymacrecords.com";
  $subject="32Market Contact Form";
  $first=$_POST["first-name"];
  $last=$_POST["last-name"];
  $senderEmail=$_POST["sender-email"];
  $senderPhone=$_POST["sender-phone"];
  $message=$_POST["message"];

  $mailBody="Name: $first $last\n\nEmail: $senderEmail\nPhone: $senderPhone\n\nMessage: \n\n$message";

  mail($recipient, $subject, $mailBody, "From: $first $last <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent.</p><br>
  <br>
  <a href=\"team.html\">Return</a>";
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Form Sent | Three Square Market</title>
</head>

<body>

    <?=$thankYou ?>

</body>

</html>