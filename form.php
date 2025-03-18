<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //trim() , htmlspecialchars() and stripslashes() are combine into test_input
  if (empty($name)) {
    echo $nameerr = "name is required";
  } else {
    $name = test_input($_POST['nameeo']);
}
echo "<br>";
  if (empty($email)) {
    echo $emailerr = "email is required";
  } else {
    $email = test_input($_POST['emailll']);//writed by different way
}

}
?>
<br>

<br>

Welcome <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["namee"]; }?><br>
Your email address is: <?php echo $_POST["emaill"]; ?>

</body>
</html>