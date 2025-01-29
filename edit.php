<?php
include('connection.php');

// Get ID from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record with this ID
    $query = "SELECT * FROM student WHERE Id='$id'";
    $result = mysqli_query($conn, $query);

    // Fetch the record as an associative array
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Student</h1>
        <form action="update.php" method="post">
            <!-- Hidden field to preserve the ID -->
            <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">

            <!-- Display fields for Name, Email, and Password -->
            <label for="Name">Name:</label>
            <input type="text" name="Name" value="<?php echo $row['Name']; ?>" required>

            <label for="Email">Email:</label>
            <input type="email" name="Email" value="<?php echo $row['Email']; ?>" required>

            <label for="Password">Password:</label>
            <input type="password" name="Password" value="<?php echo $row['Password']; ?>" required>

            <!-- Submit button -->
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>
