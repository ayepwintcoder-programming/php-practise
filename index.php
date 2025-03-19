<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Validation</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <h1>User Input Validation</h1>

    <?php
    $namerr = $emailerr =$age= "";
    $name = $email = "";
    

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //trim() , htmlspecialchars() and stripslashes() are combine into test_input
    if (empty($_POST["name"])) {
        $namerr = "name is required";
    } else {
        $name = test_input($_POST['name']);
  }
  echo "<br>";
    if (empty($_POST["email"])) {
        $emailerr = "email is required";

    } else {
         $email = test_input($_POST['email']);//writed by different way
  }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post"><!-- post to the another page but not same like upper -->
      Name:<input type="text" name="name"><span class="err"> <?php echo $namerr;?></span><br>
      email:<input type="text" name="email"><span class="err"> <?php echo $emailerr;?></span><br>
      age:<input type="text" name="email" required><br>

      <input type="submit">
  </form>



  
</body>
</html>
