<?php
// Database connection
include('connection.php');

// Check if ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete Query
    $query = "DELETE FROM student WHERE Id='$id'";
    $result = mysqli_query($conn, $query);

    // Check if delete was successful
    if ($result) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
}
?>
