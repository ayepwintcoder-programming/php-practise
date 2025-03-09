<!DOCTYPE html>
<html>
<body>

<form method="get">
    <!-- Input for user name -->
    <label for="user">User:</label>
    <input type="text" id="user" name="user">
    <br><br>
    
    <!-- Input for color -->
    <label for="colorr">Color:</label>
    <input type="text" id="colorr" name="color">
    <br><br>
    
    <input type="submit" value="Submit">
</form>

<?php
   // Get the 'user' value from URL parameters, default to 'anonymous'
   $user = $_GET['user'] ?? "anonymous";
   echo "User: " . $user . "<br>";
  
   // Get the 'color' value from URL parameters, default to 'red'
   $color = $_GET['color'] ?? "red";
   echo "Color: " . $color;
?>  

</body>
</html>
