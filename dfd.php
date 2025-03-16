<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Validation</title>
</head>
<body>
    <h1>User Input Validation</h1>

    <form method="POST" action="validate.php">
        <label for="email">Email Address:</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" name="phone" id="phone" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
