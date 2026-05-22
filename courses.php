<?php
include('connection.php');
session_start();

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        header {
            background: #4facfe;
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
            background: #ff6b6b;
            padding: 8px 15px;
            border-radius: 6px;
        }

        header a:hover {
            background: #ff4c4c;
        }

        .container {
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin: 10px 0;
            color: #333;
        }

        .card p {
            color: #666;
            font-size: 14px;
        }

        iframe {
            width: 100%;
            border-radius: 8px;
        }

        .btn {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background: #28a745;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn:hover {
            background: #218838;
        }

        .success {
            text-align: center;
            color: green;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<header>
    <h2>📚 Courses</h2>
    <a href="dashboard.php">Back</a>
</header>

<div class="container">

<?php
$result = $conn->query("SELECT * FROM courses");

while ($row = $result->fetch_assoc()) {
?>
    <div class="card">
        <iframe height="200" src="<?php echo $row['video_url']; ?>" allowfullscreen></iframe>

        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['description']; ?></p>

        <form method="POST">
            <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
            <button class="btn" name="enroll">Enroll</button>
        </form>
    </div>
<?php
}
?>

</div>

<?php
if (isset($_POST['enroll'])) {
    $course_id = $_POST['course_id'];

    $conn->query("INSERT INTO enrollments(user_id,course_id)
    VALUES('$user_id','$course_id')");

    echo "<div class='success'>Enrolled Successfully!</div>";
}
?>

</body>
</html>