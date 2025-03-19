<html>
<body>


Welcome <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["namee"]; }?><br>
Your email address is: <?php echo $_POST["emaill"]; ?>

</body>
</html>