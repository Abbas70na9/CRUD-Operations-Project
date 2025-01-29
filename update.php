<?php
include('connection.php');

// Check if form is submitted
if (isset($_POST['update'])) {
    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Update query
    $query = "UPDATE student SET Name='$name', Email='$email', Password='$password' WHERE Id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Record with ID {$id} updated successfully!";
    } else {
        echo "Error updating record with ID {$id}: " . mysqli_error($conn);
    }

    // Redirect back to dashboard
    header("Location: dashboard.php");
    exit();
}
?>
