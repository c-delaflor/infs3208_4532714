<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli('cdfFitness_mysql', 'php', 'php', 'cdf_fitness');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = $conn->prepare('SELECT user_id, password FROM users WHERE username = ?');
    $result->bind_param('s', $username);
    $result->execute();
    $result = $result->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password...
        if ($password == $user['password']) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            $_SESSION['error'] = "Incorrect Password";
            header('Location: login.php');
        }
    } else {
        $_SESSION['error'] = "User not found";
        header('Location: login.php');
    }
}

?>
