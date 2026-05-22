<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logging Out</title>
    <meta http-equiv="refresh" content="2;url=login.php">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 300px;
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #666;
        }

        .loader {
            margin: 20px auto;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ff758c;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #ff758c;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Logging Out...</h2>
    <div class="loader"></div>
    <p>You are being logged out.</p>
    <a href="login.php">Go to Login</a>
</div>

</body>
</html>