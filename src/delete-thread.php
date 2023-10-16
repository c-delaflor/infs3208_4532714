<?php
session_start();

// Check if ID is set in POST
if (!isset($_POST['id'])) {
    header('Location: forum.php');
    exit;
}

$threadId = $_POST['id'];

$conn = new mysqli('mysql', 'php', 'php', 'cdf_fitness');

$stmt = $conn->prepare('DELETE FROM threads WHERE id = ? AND user_id = ?');
$stmt->bind_param('ii', $threadId, $_SESSION['user_id']);

if ($stmt->execute()) {
    // Redirect back to the forum with a success message
    header('Location: forum.php?message=Thread Deleted Successfully');
} else {
    // Redirect back to the forum with an error message
    header('Location: forum.php?message=Error Deleting Thread');
}

$stmt->close();
$conn->close();
?>