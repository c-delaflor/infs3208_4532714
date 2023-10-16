<?php
session_start();


// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must be logged in to create a post!";
    header('Location: forum.php');
    exit();
}


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get data from POST request
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category']; 
    
    // Validate inputs
    if (empty($title) || empty($content)) {
        $_SESSION['error'] = "Title and content cannot be empty!";
        
        exit();
    }
    
    $conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    $stmt = $conn->prepare('INSERT INTO threads (title, content, user_id, category) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssis', $title, $content, $_SESSION['user_id'], $category);
    
    if ($stmt->execute()) {
        // Redirect to the new post page
        header('Location: thread.php?id=' . $stmt->insert_id);
        
    } else {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        $_SESSION['error'] = "Error: " . $stmt->error;
        
    }
    
    // Close connections
    $stmt->close();
    $conn->close();
}
?>
