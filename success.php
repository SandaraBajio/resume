<?php
session_start();

// If not logged in, go back to login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Successful</title>
    <meta http-equiv="refresh" content="2;url=index.php">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3eafc;
            color: #44265c;
        }
        .message-box {
            background: #fff;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            color: #5e3c76;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.1em;
        }
        /* Spinner */
        .spinner {
            margin: 20px auto;
            width: 50px;
            height: 50px;
            border: 6px solid #d1b3e0;
            border-top: 6px solid #5e3c76;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Login Successful</h1>
        <p>Redirecting to your dashboard...</p>
        <div class="spinner"></div>
    </div>
</body>
</html>
