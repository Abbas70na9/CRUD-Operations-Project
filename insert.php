<?php
// Database connection
include('connection.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    $id = $_POST['Id']; // Fetch Id from form
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Insert query
    $query = "INSERT INTO student (Id, Name, Email, Password) VALUES ('$id', '$name', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Record created successfully!";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }

    // Redirect to dashboard or success page. You can change this to any page
    header("Location: dashboard.php");
    exit();
}
?>
