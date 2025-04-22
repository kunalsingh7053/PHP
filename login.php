<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = file_exists('users.json') ? json_decode(file_get_contents('users.json'), true) : [];

    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $username;
            header('Location: index.php');
            exit;
        }
    }

    echo "Invalid credentials!";
}
?>

<h2>Login</h2>
<form method="post">
    Username: <input name="username" required><br>
    Password: <input name="password" type="password" required><br>
    <button type="submit">Login</button>
</form>
