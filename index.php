<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable SQL query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    // Execute the query
    // ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form method="POST" action="">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
