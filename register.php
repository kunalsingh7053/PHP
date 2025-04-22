<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = file_exists('users.json') ? json_decode(file_get_contents('users.json'), true) : [];

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if username already exists
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "Username already exists!";
            exit;
        }
    }

    $users[] = ['username' => $username, 'password' => $password];
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    echo "Registration successful. <a href='login.php'>Login here</a>";
    exit;
}
?>

<h2>Register</h2>
<form method="post">
    Username: <input name="username" required><br>
    Password: <input name="password" type="password" required><br>
    <button type="submit">Register</button>
</form>
