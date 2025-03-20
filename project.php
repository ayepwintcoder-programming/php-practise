<?php
    declare(strict_types=1);//this is set very strict rule if parameter want string the value should be string like that

                    //this string mean match the agrument's value should be string if not match cause the err
        function ew(string $fname , string $lname) : string {
            return $fname . $lname;
        }
        $a = ew("aye","pwint");
        echo $a . "<br>"; 
//there is no err cause agrument's value is string and parameters rule set string too 
        ?>

<!DOCTYPE html>
<html>
<body>
<center>
    <h1>strict (declare(strict_types=1)  it's a rule very strict rule)</h1></center>



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
<br>
<?php
class Name {
    public $firstname;
    public $lastname;
    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname; // Corrected from $this->first
        $this->lastname = $lastname;   // Corrected from $this->last
    }
}

$myname = new Name("Ir", "is");

foreach ($myname as $x) {
    echo "$x";
}
?>
<br>
<?php
class Oame {
    public  $firtname;
    public $lastname;
    public function __construct($firstname , $lastname){
        $this->first = $firstname;
        $this->last = $lastname;
    }
}

$myname = new Oame("Ir","is");

foreach ($myname as $x) {
    echo "$x";
}
    ?>

</body>
</html>
