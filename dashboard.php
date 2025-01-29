<?php
include('connection.php');

// Fetch all records from the student table
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: Add your CSS file -->
</head>
<body>
    <div class="container">
        <h1>User Dashboard</h1>
        
        <!-- Table to display records -->
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetching all rows from the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['Id']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Password']}</td>
                        <td>
                            <a href='edit.php?id={$row['Id']}'>Edit</a> |
                            <a href='delete.php?id={$row['Id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        
        <!-- Button to add a new user -->
        <a href="create.php">Add New User</a>
    </div>
</body>
</html>
