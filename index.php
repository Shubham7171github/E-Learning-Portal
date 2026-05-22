<!DOCTYPE html>
<html>
<head>
    <title>E-Learning Portal</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        header {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            padding: 20px;
            text-align: center;
            color: white;
        }

        header h1 {
            margin: 0;
        }

        .container {
            text-align: center;
            margin-top: 60px;
        }

        .container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .nav-links {
            margin-top: 20px;
        }

        .nav-links a {
            text-decoration: none;
            margin: 10px;
            padding: 12px 20px;
            background: #4facfe;
            color: white;
            border-radius: 8px;
            display: inline-block;
            transition: 0.3s;
        }

        .nav-links a:hover {
            background: #00c6ff;
        }

        .card {
            background: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        footer {
            text-align: center;
            margin-top: 80px;
            padding: 15px;
            background: #222;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>📚 E-Learning Portal</h1>
</header>

<div class="container">
    
    <div class="card">
        <h2>Start Learning Today</h2>
        <p>Join our platform to explore courses, track progress, and build skills.</p>

        <div class="nav-links">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="add_course.php">Add Course</a>
        </div>
    </div>

</div>

<footer>
    <p>© 2026 E-Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>