<?php
session_start();

$valid_email = "sandara";
$valid_password = "sandarapass";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validation
    if ($email === "" || $password === "") {
        $error = "All fields are required.";
    } elseif ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header("Location: success.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <style>
          .login-container {
            max-width: 400px;
            margin: 100px auto;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #44265c;
        }
        .login-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background: #5e3c76;
            color: #fff;
            font-size: 1em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }
        .login-container button:hover {
            background: #44265c;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="email">Email/Username:</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>

