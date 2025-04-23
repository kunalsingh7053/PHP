<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    } else {
        // Format the message
        $entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";

        // Save to file
        file_put_contents("messages.txt", $entry, FILE_APPEND);
        echo "Message saved successfully!";
    }
} else {
    // Show a basic form interface in terminal or browser (for testing)
    echo <<<EOD
<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Message:<br><textarea name="message" rows="5" cols="30"></textarea><br>
    <input type="submit" value="Send">
</form>
EOD;
}
?>
