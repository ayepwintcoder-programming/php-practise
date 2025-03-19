<html>
    <head>
        <style>
.err {color: #FF0000;}
        </style>
    </head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- $_SERVER["PHP_SELF"]) is post the data in the same page-->
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<br>
<br>
<form action="form.php" method="post"><!-- post the data to another page-->
    Name:<input type="text" name="namee"><br>
    Email:<input type="text" name="emaill">
    <input type="submit">
</form> 
<br>
<br>

<?php
  $name = $email = "";
  $nameerr = $emailerr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //trim() , htmlspecialchars() and stripslashes() are combine into test_input
    if (empty($name)) {
       $nameerr = "name is required";
    } else {
      $name = test_input($_POST['nameeo']);
  }
  echo "<br>";
    if (empty($email)) {
       $emailerr = "email is required";
    } else {
      $email = test_input($_POST['emailll']);//writed by different way
  }

  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post"><!-- post to the another page but not same like upper -->
      Name:<input type="text" name="nameeo"><span class="err"><?php echo $nameerr;?></span><br>
      email:<input type="text" name="emailll"><span class="err"><?php echo $emailerr;?></span><br><!-- this way is you can write the text as you like-->
      age:<input type="text" name="age" required><!--this way is less write but not good looking-->
      <input type="submit">
  </form>

  Welcome <?php echo $_POST["nameeo"]; ?><br>
Your email address is: <?php echo $_POST["emailll"]; ?><br>
AGE <?php echo $_POST["age"]; ?>
  <br>
  <br>



<center><h1>get method</h1></center>

<form action="form.php" method="get"><!-- post to the another page but data will show in the url box -->
     Name:<input type="text" name="nameeo">
    email:<input type="text" name="emailll">
    <input type="submit">
</form>
<br>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
    <!-- post to the same page but data will show in the page and also  url box -->
     Name:<input type="text" name="awe">
    email:<input type="text" name="eee">
    <input type="submit">
</form>

Welcome <?php echo $_GET["awe"]; ?><br>
Your email address is: <?php echo $_GET["eee"]; ?>
</body>
</html>