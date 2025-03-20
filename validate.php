<?php
// Form ကို submit လုပ်တဲ့အခါ စစ်ဆေးခြင်း
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name

    // Email validation pattern (email format စစ်ဆေးမှု regex)
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

    // Phone number validation pattern (phone number format စစ်ဆေးမှု regex)
    $phone_pattern = "/^(\+\d{1,2}\s?)?(\(\d{3}\)|\d{3})[\s.-]?\d{3}[\s.-]?\d{4}$/";

    // User input ရယူရန်
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Email ကို validate လုပ်ခြင်း
    if (preg_match($email_pattern, $email)) {
        $email_valid = "Valid email address.";
    } else {
        $email_valid = "Invalid email address.";
    }

    // Phone number ကို validate လုပ်ခြင်း
    if (preg_match($phone_pattern, $phone)) {
        $phone_valid = "Valid phone number.";
    } else {
        $phone_valid = "Invalid phone number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Results</title>
</head>
<body>

    <h1>Validation Results</h1>

    <p><?php echo $email_valid; ?></p>
    <p><?php echo $phone_valid; ?></p>

    <a href="index.php">Go back</a>

</body>
</html>
