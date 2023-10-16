<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $commentable_id = $_POST['commentableId'];
    $_SESSION['error'] = "You must be logged in to comment!";
    header("Location: thread.php?id=$commentable_id");   // Redirect back to the appropiate thread page..
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get data from POST request
    $content = $_POST['commentContent'];
    $commentable_id = $_POST['commentableId'];  // Assuming each thread has an associated ID you're sending in the form

    // Validate inputs
    if (empty($content)) {
        $_SESSION['error'] = "Comment content cannot be empty!";
        header('Location: thread.php?id=' . $commentable_id);  // Redirect back to the same thread page
        exit();
    }

    $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('INSERT INTO comments (content, user_id, commentable_id) VALUES (?, ?, ?)');
    $stmt->bind_param('sii', $content, $_SESSION['user_id'], $commentable_id);  // Two integers and one string
    
    if ($stmt->execute()) {
        // Redirect back to the thread where the comment was posted
        header('Location: thread.php?id=' . $commentable_id);
    } else {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        $_SESSION['error'] = "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
}
?>