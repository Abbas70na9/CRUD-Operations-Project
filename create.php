<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Create New Student</h1>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="Id">ID:</label>
                <input type="hidden" name="Id" id="Id" >
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="Name" id="Name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="Email" id="Email" required>
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" name="Password" id="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>
