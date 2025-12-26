<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $body = htmlspecialchars($_POST['message'] ?? '');

    if ($name && $email && $subject && $body) {
        $to = 'your-email@example.com';
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $message = 'Message sent successfully!';
        } else {
            $message = 'Error sending message.';
        }
    } else {
        $message = 'Please fill in all fields.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; }
        form { display: flex; flex-direction: column; }
        input, textarea { padding: 10px; margin: 10px 0; }
        button { padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
        .message { margin: 10px 0; padding: 10px; background: #f0f0f0; }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    
    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Message" rows="5" required></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>