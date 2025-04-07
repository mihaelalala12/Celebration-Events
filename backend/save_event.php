<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$eventDate = $_POST['eventDate'] ?? '';
$eventType = $_POST['eventType'] ?? '';
$messageText = $_POST['message'] ?? '';

$to = "msimonovska1212@yahoo.com";
$subject = "New Event Request from $name";

$message = "
<html>
<head>
  <title>New Event Request</title>
</head>
<body>
  <h2>Event Request Details:</h2>
  <p><strong>Name:</strong> $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Date:</strong> $eventDate</p>
  <p><strong>Event Type:</strong> $eventType</p>
  <p><strong>Message:</strong><br>$messageText</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html; charset=UTF-8\r\n";
$headers .= "From: Event Planner <noreply@yourdomain.com>\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "OK"; // The client can check for this response
} else {
    echo "Error while sending the email";
}
?>
