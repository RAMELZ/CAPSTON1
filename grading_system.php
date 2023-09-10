<?php
// Database connection
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "grading_system"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to calculate the grade based on score
function calculateGrade($score) {
    if ($score >= 90) {
        return 'A';
    } elseif ($score >= 80) {
        return 'B';
    } elseif ($score >= 70) {
        return 'C';
    } elseif ($score >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

// Add a new student to the database
if (isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $score = $_POST['score'];

    $sql = "INSERT INTO students (name, score) VALUES ('$name', $score)";

    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Query all students from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grading System</title>
</head>
<body>
    <h1>Grading System</h1>
    
    <!-- Form to add a new student -->
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="score">Score:</label>
        <input type="number" name="score" min="0" max="100" required><br>
        <input type="submit" name="add_student" value="Add Student">
    </form>

    <!-- Display students and their grades -->
    <h2>Student List:</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Score</th>
            <th>Grade</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['score'] . "</td>";
                echo "<td>" . calculateGrade($row['score']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No students found</td></tr>";
        }
        ?>
    </table>

    <?php
    $conn->close();
    ?>
</body>
</html>