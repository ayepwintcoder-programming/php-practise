<!DOCTYPE html>
<html>
<head>
    <title>အသုံးပြုသူ စီမံခန့်ခွဲမှု (ဒေတာဘေ့စ်)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
        h1, h2 {
            color: #333;
        }
        .user-item {
            margin-bottom: 10px;
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
        button {
            padding: 5px 10px;
            margin: 0 5px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>အသုံးပြုသူ စီမံခန့်ခွဲမှု (ဒေတာဘေ့စ်)</h1>

    <?php
    // Database Class သတ်မှတ်မယ်
    class Database {
        private $connection;

        public function __construct($host, $username, $password, $database) {
            $this->connection = mysqli_connect($host, $username, $password, $database);
            if (!$this->connection) {
                die("ဒေတာဘေ့စ် ချိတ်ဆက်မှု မအောင်မြင်ပါ: " . mysqli_connect_error());
            }
        }

        public function query($sql) {
            return mysqli_query($this->connection, $sql);
        }

        public function fetchAll($result) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function escape($string) {
            return mysqli_real_escape_string($this->connection, $string);
        }

        public function close() {
            mysqli_close($this->connection);
        }
    }

    // Database Object ဖန်တီးမယ်
    $db = new Database("localhost", "root", "", "user_db");

    // အသုံးပြုသူအသစ် ထည့်တာကို လက်ခံမယ်
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
        $name = $db->escape($_POST["name"]);
        $email = $db->escape($_POST["email"]);
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        $db->query($sql);
    }

    // ဖျက်တာကို လက်ခံမယ်
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = $db->escape($_POST['delete']);
        $sql = "DELETE FROM users WHERE id = '$id'";
        $db->query($sql);
    }

    // ပြင်တာကို လက်ခံမယ်
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
        $id = $db->escape($_POST['edit']);
        $newName = $db->escape($_POST["new_name_$id"]);
        $newEmail = $db->escape($_POST["new_email_$id"]);
        $sql = "UPDATE users SET name = '$newName', email = '$newEmail' WHERE id = '$id'";
        $db->query($sql);
    }
    ?>

    <!-- ဒေတာဘေ့စ်က အသုံးပြုသူအားလုံးကို ပြမယ် -->
    <h2>အသုံးပြုသူများ စာရင်း</h2>
    <div class="result">
        <?php
        $result = $db->query("SELECT * FROM users");
        $users = $db->fetchAll($result);

        if (!empty($users)) {
            foreach ($users as $user) {
                echo "<div class='user-item'>";
                echo "အမှတ်စဉ်: " . $user['id'] . "<br>";
                echo "အမည်: " . $user['name'] . "<br>";
                echo "အီးမေးလ်: " . $user['email'] . "<br>";
                ?>
                <!-- ဖျက်ဖို့ ခလုတ် -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="delete" value="<?php echo $user['id']; ?>">
                    <button type="submit">ဖျက်မယ်</button>
                </form>
                <!-- ပြင်ဖို့ ဖောင် -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="edit" value="<?php echo $user['id']; ?>">
                    အမည်အသစ်: <input type="text" name="new_name_<?php echo $user['id']; ?>" value="<?php echo $user['name']; ?>" required>
                    အီးမေးလ်အသစ်: <input type="email" name="new_email_<?php echo $user['id']; ?>" value="<?php echo $user['email']; ?>" required>
                    <button type="submit">ပြင်မယ်</button>
                </form>
                <?php
                echo "</div>";
            }
        } else {
            echo "အသုံးပြုသူ မရှိသေးပါ။";
        }
        ?>
    </div>

    <!-- အသုံးပြုသူအသစ် ထည့်ဖို့ ဖောင် -->
    <h2>အသုံးပြုသူအသစ် ထည့်ပါ</h2>
    <form method="POST">
        <label for="name">အမည်:</label><br>
        <input type="text" name="name" id="name" placeholder="သင့်အမည်" required><br><br>
        <label for="email">အီးမေးလ်:</label><br>
        <input type="email" name="email" id="email" placeholder="သင့်အီးမေးလ်" required><br><br>
        <input type="hidden" name="add" value="1">
        <input type="submit" value="ထည့်မယ်">
    </form>

    <?php
    // ဒေတာဘေ့စ် ချိတ်ဆက်မှု ပိတ်မယ်
    $db->close();
    ?>
</body>
</html>