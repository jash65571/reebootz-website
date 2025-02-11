<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $deviceType = $_POST['device-type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $mainProblem = $_POST['main-problem'];
    $subProblem = $_POST['sub-problem'];
    $issueDesc = $_POST['issue-desc'];
    $dateTime = $_POST['date-time'];
    $location = $_POST['location'];

    // Email details
    $to = "jashpatel1802@gmail.com"; // Replace with your email address
    $subject = "New Mobile Repair Booking";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Device Type: $deviceType\n";
    $message .= "Brand: $brand\n";
    $message .= "Model: $model\n";
    $message .= "Main Problem: $mainProblem\n";
    $message .= "Sub Problem: $subProblem\n";
    $message .= "Issue Description: $issueDesc\n";
    $message .= "Preferred Date & Time: $dateTime\n";
    $message .= "Location: $location\n";

    // Send email
    $headers = "From: no-reply@example.com"; // Replace with a valid sender email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thank you! Your booking details have been sent successfully.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your booking details. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
