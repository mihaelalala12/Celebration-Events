<?php
$eventName = $_POST['eventName'] ?? 'No Name';
$eventDate = $_POST['eventDate'] ?? 'No Date';
$eventLocation = $_POST['eventLocation'] ?? 'No Location';
$eventDescription = $_POST['eventDescription'] ?? 'No Description';
$eventType = $_POST['eventType'] ?? 'Unknown';

$to = "msimonovska1212@yahoo.com";
$subject = "📅 New Event Created: $eventName";

$message = "
<html>
<head>
  <title>New Event Submission</title>
</head>
<body>
  <h2>New Event Request</h2>
  <p><strong>Event Name:</strong> $eventName</p>
  <p><strong>Date:</strong> $eventDate</p>
  <p><strong>Location:</strong> $eventLocation</p>
  <p><strong>Type:</strong> $eventType</p>
  <p><strong>Description:</strong><br>$eventDescription</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html; charset=UTF-8\r\n";
$headers .= "From: Event Planner <noreply@localhost>\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "❌ Error while sending the email.";
}
?>
