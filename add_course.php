<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef2f7;
        }

        header {
            background: #28a745;
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
            text-decoration: none;
            color: white;
            background: #dc3545;
            padding: 8px 15px;
            border-radius: 6px;
        }

        header a:hover {
            background: #c82333;
        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .card h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40,167,69,0.5);
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #218838;
        }

        .success {
            margin-top: 15px;
            color: green;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>

<header>
    <h2>Admin Panel</h2>
    <a href="dashboard.php">Back</a>
</header>

<div class="container">
    <div class="card">
        <h3>➕ Add New Course</h3>

        <form method="POST">
            <input type="text" name="title" placeholder="Course Title" required>
            <textarea name="description" placeholder="Course Description" required></textarea>
            <input type="text" name="video_url" placeholder="YouTube Embed Link" required>
            <button type="submit" name="add">Add Course</button>
        </form>

        <?php
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $video = $_POST['video_url'];

            $conn->query("INSERT INTO courses(title,description,video_url)
            VALUES('$title','$desc','$video')");

            echo "<div class='success'>Course Added Successfully!</div>";
        }
        ?>
    </div>
</div>

</body>
</html>