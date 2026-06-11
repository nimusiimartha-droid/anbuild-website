<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false]);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

$fullname = htmlspecialchars(strip_tags(trim($input['fullname'] ?? '')));
$phone    = htmlspecialchars(strip_tags(trim($input['phone'] ?? '')));
$email    = filter_var(trim($input['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$message  = htmlspecialchars(strip_tags(trim($input['message'] ?? '')));

if (empty($fullname) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false]);
    exit;
}

$to      = 'mwesigwemmanuel24@gmail.com';
$subject = "New Enquiry from $fullname — AN Build Website";
$body    = "Name:    $fullname\n"
         . "Phone:   " . ($phone ?: 'Not provided') . "\n"
         . "Email:   $email\n\n"
         . "Message:\n$message\n";

$headers  = "From: AN Build Website <noreply@anbuild.co.ug>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

echo json_encode(['success' => mail($to, $subject, $body, $headers)]);
