<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        header {
            background: #667eea;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            margin: 0;
        }

        header a {
            color: white;
            text-decoration: none;
            background: #ff6b6b;
            padding: 8px 15px;
            border-radius: 6px;
            transition: 0.3s;
        }

        header a:hover {
            background: #ff4c4c;
        }

        .container {
            padding: 40px;
            text-align: center;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 350px;
            margin: auto;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            color: #666;
            margin-bottom: 20px;
        }

        .btn {
            display: block;
            text-decoration: none;
            margin: 10px 0;
            padding: 12px;
            background: #667eea;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #5a67d8;
        }

        .admin-btn {
            background: #28a745;
        }

        .admin-btn:hover {
            background: #218838;
        }
    </style>
</head>

<body>

<header>
    <h2>Dashboard</h2>
    <a href="logout.php">Logout</a>
</header>

<div class="container">

    <div class="card">
        <h3>Welcome, <?php echo $_SESSION['user_name']; ?> 👋</h3>
        <p>Manage your learning and explore courses.</p>

        <a class="btn" href="courses.php">📚 View Courses</a>

        <?php if ($_SESSION['role'] == "admin") { ?>
            <a class="btn admin-btn" href="admin/add_course.php">➕ Add Course (Admin)</a>
        <?php } ?>
    </div>

</div>

</body>
</html>