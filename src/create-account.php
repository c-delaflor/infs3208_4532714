<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");

    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'Username already exists!';
        header("location: create.php");
    } else {
        // Insert user into database
        $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {

            $user_id = $conn->insert_id;
            
            $_SESSION['message'] = 'Account created successfully';
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id; // Store user_id in session

            header('Location: index.php');
        } else {
            echo 'Error: ' . $stmt->error;
        }
    }

    // Close connections
    $stmt->close();
    $conn->close();
}

?>