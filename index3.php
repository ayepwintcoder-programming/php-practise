

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php echo "hello world"; 
//this is a  line comment
#also a line comment 
/*this one is use
 for paragraph*/

$_name = 50;#in php variable can start with _ and letters but numbers ban
$adf_8915 = 50;

echo $_name + $adf_8915;

?>

<?php
$_ = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $_</p>";
} 
myTest();

  echo "<p>Variable x outside function is: $_</p>";
?>

    <?php
function mytext(){
    $lsd = 9 ;#local scope
    echo "$lsd<br>";
}
mytext()

/*echo $lsd;//can't output the local variable outsite echo*/
?>

<?php
    //if you want to use the globel variable in function.do this and you can use again and again the variables

    $u = 6 ;
    $i = 8 ;
    function myfunction(){
        global $u , $i;
        return $u + $i ;
    }

    echo myfunction();
    echo "<br>";


function mytcst() {
global $u , $i;
$t = $u + $i;
 return  $t;
 }
 
 $t = mytcst() ;
echo "$t<br>"; 


function myantest(){
    global $u , $i , $t;
    $t = $u + $i;
}
echo $t;
echo "<br>";

function daf() {
 $GLOBALS['t'] = $GLOBALS['u'] + $GLOBALS['i'];#note- you must always write "GLOBALS" with capital letters
}
 
daf();
echo $t;  // Outputs 14
echo "<br>";
?>

<?php
//you shouldn't use calling global variable in function it'll be mixing 
    $u = 6;
    $i = 8;
    function myfunctio(){
        global $u , $i;
        $i = $u + $i;
    }
    myfunctio();
    echo "$i<br>";#now $i = 14; if you $i again in another function $i is not 8 anymore
    ?>
    
    <?php
function trackVisitors() {
    static $visitors = 0; // Persists across calls
    $visitors++;
    echo "Visitor #$visitors<br>";
}
trackVisitors(); // Visitor #1
trackVisitors(); // Visitor #2
trackVisitors(); // Visitor #3
?>
<?PHP
function countUp() {
    static $count = 0; // Static local variable
    $count++;
    echo $count . "<br>";
}
countUp(); // Outputs: 1
countUp(); // Outputs: 2
countUp(); // Outputs: 3
?>
<br>
<?php
function counter() {
    static $count = 0; // This variable is preserved between calls
    $count++;
    return $count . '<br>';

}
echo counter();
echo counter();
echo counter();

$name = 'Linus';
function myTestd() {
  global $name;
  $name = 'Tobias';
}
myTestd();
echo $name;

$name = 'Linus';
function myTedst() {
  $GLOBALS['name'] = 'Tobias';
}
myTedst();
echo $name;
?> 

<center><h1>Data type</h1></center>


<center><h3>you can use 'var_dump' for get data type.</h3></center>

<?php

$x= 8.5;
$a= array("dlfj" , 545 , true);

var_dump($x);
echo "<br>";
var_dump(false);
echo "<br>";
var_dump("kdfd");#var_dump also show how many letters
echo "<br>";
var_dump(2452);
echo "<br>";
var_dump($a);

?>

<h3>this is php object</h3>
<?php
class bicycle{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color =$color;
        $this->model =$model;
    }

    public function message(){
        return "my car is " . $this->color . " " . $this->model;
    }
}

$mybi = new bicycle("red","BMW");
$mybi1 = new bicycle("yellow","brand");

$bis = [$mybi,$mybi1];

?>

<?php 
foreach ($bis as $bi){
    echo "<li>" . $bi->message() ."</li>";
}

echo $mybi->message();
echo "<br>";
?>
<h2>you can change data type by not changing value </h2>
<pre>
$x = "8";
$x = (integer) $x;

var_dump($x);
</pre>


<?php
$x = "8";
$x = (integer) $x;

var_dump($x);
echo "<br>";
?>

<center><h2>modify strings</h2></center>
<?php
echo "<h3>strlen function</h3>";
echo strlen("hello world"); // counting number of letters
echo "<br>";
echo "<h3>str_word_count function</h3>";
echo str_word_count("hello world"); // counting number of words
echo "<br>";
echo "<h3>strpos function</h3>";
echo strpos("May I help you?", "I"); // counting number of letter's position (starts with 0)
echo "<br>";
echo "<h3>strtoupper</h3>";
echo strtoupper("hello world");
echo "<br>";
echo "<h3>strtolower</h3>";
echo strtolower("HELLO WORLD");
echo "<br>";
echo "<h3>strrev</h3>";
echo strrev("hello world");
echo "<br>";
echo "<h3>str_replace</h3>";
echo str_replace("hello", "Dolly", "hello world");
echo "<br>";
echo "<h3>explode function is change string to array</h3>";

$x = "hello world";
$y = explode(" ",$x);
//Use the print_r() function to display the result:
print_r($y);
?>

<center>
    <h2>slicing string</h2>
</center>

<?php
echo "<h2>substr</h2>";
echo "<br>";
echo substr("hello world" , 2 , 3);//strat from 2and end at 3 (llo)
echo "<br>";
echo substr("hello world" , 2 );//strat from 2and end all along(llo world)
echo "<br>";
echo substr("hello world" , -3 , 3);//strat end of 3 position and reend at 3 (rld)
echo "<br>";
echo substr("hello world" , 2 , -3);//strat from 2and end at -3 (llo wo)
?>

<center>
    <h1>checking data type is string? </h1></center>

    <li>is_int()/ var_dump(is_int($x))</li>
    <li>is_integer()</li>
    <li>is_long()</li>

    <?php
        $x = 8752;
        var_dump(is_int($x));

        $y = 81.58;
        var_dump(is_long($y));
        ?>

<center>
    <h1>checking data type is float(double)? </h1></center>

    <li>is_float()/ var_dump(is_int($x))</li>
    <li>is_double()</li>


    <?php
        $x = 8752;
        var_dump(is_float($x));

        $y = 81.58;
        var_dump(is_double($y));
        ?>

        
<center>
    <h1>check if the variable is numeric </h1></center>

    <li>is_numeric()/var_dump(is_numeric($x))</li>

<br>

    <?php
        $x = 8752;
        $y = "81.58";
        $z = "8158";
        $p = "sdf";
        $t = 24.2;
        var_dump(is_numeric($y));echo  "\"81.58\"";
        echo "<br>";    
        var_dump(is_numeric($x));echo 8752;
        echo "<br>";
        var_dump(is_numeric($z));echo  "\"8158\"";
        echo "<br>";
        var_dump(is_numeric($p));echo  "\"sdf\"";
        echo "<br>";
        var_dump(is_numeric($t));echo  24.2;
        ?>

<h1>change string to array /print_r (explode(" ",$str))</h1>
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?> 

<center>
    <h1>Math</h1>

    <h3>The min() and max() functions can be used to find the lowest or highest value in a list of arguments:</h3></center>
    <li>min/echo min($t);</li>
    <li>max/echo max($t);</li>

    <?php 
        $a = 0;
        $b = 1;
        $c = 2;
        $d = 3;
        $e = 4;

        $t = array ($a,$b,$c,$d,$e);
        echo min($t) . "<br>";
        echo max($t);
    ?>
<br>
<h3>The abs() function returns the absolute (positive) value of a number/echo (abs(-85))</h3></center>

    <?php 
        echo (abs(-85));
    ?>
<br>
<h3>The sqrt() function returns the square root of a number/echo (sqrt(81))</h3></center>
    <?php
    echo (sqrt(81));
?>
<br>
<h3>The round() function rounds a floating-point number to its nearest integer/echo(round(0.5))</h3>

<?php
    echo(round(0.5));
echo "<br>";
    echo(round(1.2));
?>
<br>

<h3>The rand() function generates a random number/echo(rand())</h3>

<?php
echo (rand());
?>

<p>rand(1,100); random number between 1 to 100</p>

<?php
    echo (rand(1,100));
    ?>

<center><h1>magic constants</h1></center>
<?php

echo __DIR__;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__; #__CLASS__,__FUNCTION__
echo "<br>";
echo "ect...";

?>

<center>
    <h1> Conditional Assignment Operators (?: , ??)</h1>
</center>

<form method="get">
    <label>User: <input type="text" name="user"></label><br><br>
    <label>Phone: <input type="text" name="phone"></label><br><br>
    <label>age: <input type="text" name="age"></label><br><br>
    <input type="submit" value="Submit">
</form>

<?php

if (!empty($_GET)) {
    // Ternary operator (?:)
    $user = $_GET['user'] ? $_GET['user'] : "none";
    echo "User: $user<br>";

    // Null coalescing operator (??)
    $phone = $_GET['phone'] ? $_GET['phone'] : "need phone";
    echo "Phone: $phone" . "<br>";

}


$age = $_GET['age'] ?? "over 18";
echo "age:" . $age ."<br>";

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : $user;
?>
<center>
    <h1>
        if,if else, if elseif else statements
    </h1>
</center>
<pre>if (condition) {
  // code to be executed if condition is true;
}</pre>

<?php
if (5 > 3) {
    echo "Have a good day!";
  }
  echo "<br>";
  ?>
  <pre>
  if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}
</pre>

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!" . "<br>";
}?>

<pre>if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}</pre>

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!" . "<br>";
}?>

<h2>Nested if</h2>
<?php
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}?>


<center><h1>switch statement</h1></center>
<br>

<pre>$e = "berry";

switch ($e) {
    case "strawberry";
        echo "you like strawberry";
    
        break;
    
    case "orange";
        echo "you like orange";
    break;

    case "berry";
    echo "you like berry";

    break;

    default:
    echo "you don't like fruit";//if there is no match in upper cases the answer will be default
}
</pre>
<?php
$e = "berry";

switch ($e) {
    case "strawberry";
        echo "you like strawberry";
    
        break;
    
    case "orange";
        echo "you like orange";
    break;

    case "berry";
    echo "you like berry";

    break;

    default:
    echo "you don't like fruit";//if there is no match in upper cases the answer will be default
}
?>

<center><h1>Loops</h1></center>

<p style="font-size:16px; margin-left:50px;" >while loop,do while loop,for loop,foreach loop</p>

<H2>while loop</H2>

<?php
$n = 5;
$y = 6;

    while ($n < 10) {
        if ($n == 8) break;//with break statement we can stop stop the loop even if the condition is still true
        echo "$n<br>";
        $n++; 
    }
echo "<br>";
    while ($y < 15) {
        $y++; 
        if ($y == 8){ continue;}//with continue statement we can skip the number
        echo "$y<br>";

    }
    /* while loop without break statement or continue 
    $n = 5;

    while ($n < 10) {
        echo "$n<br>";
        $n++; 
    }*/
echo "<h2>do while loop (do statement is execut code if the \"while\" condition is true of false whatever it will output the value of \$n but the condition of \"while\" is true it will execute    )</h2>";


do {
    echo "$n<br>";
    $n++;
} while ($n < 10);

echo "<h2>for loop(for loop is useful for when you know how many time script should run)</h2>";

    for ($x = 0 ; $x <= 100 ; $x+=50) {
        echo "the number is : $x <br>";
    }


    echo "<h2>foreach loop(foreach loop is use for arry and object)</h2>";

    $fruit = array("strawberry" , "banana" , "apple");

    foreach ($fruit as $x) {
        echo "$x <br>";
    }
echo "<br>";
    $ruit = array("susu likes"=>"strawberry", "mimi likes" => "banana");
    foreach ($ruit as $x => $y) {
        echo "$x:$y <br>";
    }
    echo "<br>";

class name {
    public  $firtname;
    public $lastname;
    public function __construct($firstname , $lastname){
        $this->first = $firstname;
        $this->last = $lastname;
    }
}

$myname = new name("Ir","is");

foreach ($myname as $x) {
    echo "$x";
}
    ?>

    <pre>
 ^
 |    
    Class name {
    public  $firtname;
    public $lastname;
    public function __construct($firstname , $lastname){
        $this->first = $firstname;
        $this->last = $lastname;
    }
}

$myname = new name("Ir","is");

foreach ($myname as $x) {
    echo "$x";
}
</pre>

<center>
    <h1 style="text-transform:uppercase">function</h1>
</center>

<pre>

function mypt($animal , $owner , $color) {
    echo "this $color $animal  is belong to $owner <br>";
    }

mypt("cat" , "me" , "black");
<hr>
function mypi($animal = "dog" , $owner = "his" , $color="brown") {
        echo "this $color $animal is belong to $owner <br>";
    }
    mypi();

    <hr>
    $a = 1;
    $b = 2;

    function ret() {
        global $a ,$b;
        $s = $a + $b;
        return $s;
    }
    echo "1 + 2 =" . ret() . "<br>";
<hr>
    //another way

    function rei($c , $d) {
        $t = $c * $d;
        return $t;
    }

    echo "8*8=" . rei(8,8) ."<br>";
    echo "9*9=" . rei(9,9) ."<br>";
<hr>
    function u(&$name) {//& is change the $num value without that code will run no err but not change the agrument value($num)
        $name += 5;
    }
    $num = 2;
    u($num);
    echo $num;
</pre>
    <?php

	function mypt($animal , $owner , $color) {
		echo "this $color $animal  is belong to $owner <br> <br>";
        }
    
    mypt("cat" , "me" , "black");

    function mypi($animal = "dog" , $owner = "his" , $color="brown") {
        echo "this $color $animal is belong to $owner <br>";
    }
    mypi();//will use the default value of parameter

    echo "<h2>return statement</h2>";

    $a = 1;
    $b = 2;

    function ret() {
        global $a ,$b;
        $s = $a + $b;
        return $s;
    }
    echo "1 + 2 =" . ret() . "<br>";

    //another way

    function rei($c , $d) {
        $t = $c * $d;
        return $t;
    }

    echo "8*8=" . rei(8,8) ."<br>";
    echo "9*9=" . rei(9,9) ."<br>";

    echo"<center>passing agrument by reference</center>";

    function u(&$name) {//& is change the $num value without that code will run no err but not change the agrument value($num)
        $name += 5;
    }
    $num = 2;
    u($num);
    echo $num ."<br>";


    function io(...$gethearraynumbers) {
        $o = 2 ;
        $counthearraynumbers = count($gethearraynumbers);//set $gethearraynumbers because that parameters value is $ali's
        for($i = 1 ; $i < $counthearraynumbers ; $i+=2){//always remember if you set 0 it will start by 0 place.if you set 1 it will start by 1 place
            $o += $gethearraynumbers[$i];          //^နေရာကို2တိုးပီးပေါင်း 2+4=6
            //$o' 2 ကို6နဲ့ပေါင်း          
        }
        return $o;
    }
    $a = io(1/*0*/ , 2 , 3, 4, 5);
    echo $a;

?>
<hr>
<pre>
    
function u(&$name) {//& is change the $num value without that code will run no err but not change the agrument value($num)
        $name += 5;
    }
    $num = 2;
    u($num);
    echo $num ."<br>";

function io(...$gethearraynumbers) {
        $o = 2 ;
        $counthearraynumbers = count($gethearraynumbers);//set $gethearraynumbers because that parameters value is $ali's
        for($i = 1 ; $i < $counthearraynumbers ; $i+=2){//always remember if you set 0 it will start by 0 place.if you set 1 it will start by 1 place
            $o += $gethearraynumbers[$i];          //^နေရာကို2တိုးပီးပေါင်း 2+4=6
            //$o' 2 ကို6နဲ့ပေါင်း          
        }
        return $o;
    }
    $a = io(1/*0*/ , 2 , 3, 4, 5);
    echo $a;
</pre>
<hr>
<pre>
	function ui($animal , ...$color) {
    	$txt = " ";
        $len = count($color);
        for($i = 0 ; $i < $len ; $i++){
         $txt .= "hi, {$color[$i]} $animal.<br>";
        }
    return $txt;
    }
    $e = ui("cat", "orange" ,"black" ,"white" ,"gray");
    echo $e;
</pre>
    <?php
	function ui($animal , ...$color) {
    	$txt = " ";
        $len = count($color);
        for($i = 0 ; $i < $len ; $i++){
         $txt .= "hi, {$color[$i]} $animal.<br>";
        }
    return $txt;
    }
    $e = ui("cat", "orange" ,"black" ,"white" ,"gray");
    echo $e;
?>
<center>
    <h1>strict (declare(strict_types=1)  it's a rule very strict rule)</h1></center>
<pre>    //declare(strict_types=1);//this should be the firt line of the file(that why i set command if you want to see how it work go to project.php file) and this is set very strict rule if parameter want string the value should be string like that

//this string mean match the agrument's value should be string if not match cause the err
function ew(string $fname , string $lname) : string {
return $fname . $lname;
}
$a = ew("aye","pwint");
echo $a . "<br>"; 
//there is no err cause agrument's value is string and parameters rule set string too </pre>
    <?php
    //declare(strict_types=1);//this should be the firt line of the file(that why i set command if you want to see how it work go to project.php file) and this is set very strict rule if parameter want string the value should be string like that

                    //this string mean match the agrument's value should be string if not match cause the err
        function ew(string $fname , string $lname) : string {
            return $fname . $lname;
        }
        $a = ew("aye","pwint");
        echo $a . "<br>"; 
//there is no err cause agrument's value is string and parameters rule set string too 
echo "<hr>";
        
echo "<pre>function addNumbers(int \$a, int \$b): float {
        // With :float, the function returns the division result as a float (e.g., 0.833... for 5/6). With :int, the float result is truncated to an integer (e.g., 0).
    return  \$a / \$b;
  }
  echo addNumbers(5, \"10\");//\"10\"(string) auto changed to 10 because of only without strict </pre>";


function addNumbers(int $a, int $b): float {
        // With :float, the function returns the division result as a float (e.g., 0.833... for 5/6). With :int, the float result is truncated to an integer (e.g., 0).
    return  $a / $b;
  }
  echo addNumbers(5, "10");//"10"(string) auto changed to 10 because of only without strict 
  

        ?>

<center>
    <h1>Array</h1>
</center>

<?php 
    $pets = array (
        array ("cat" , 10 , "orange"),
        array ("dog" , 12 , "white"),
        array ("fish" , 8 , "yellow"),
    );

    for ($row = 0; $row < 3 ; $row++) {
        echo "<p><b>Row number $row</b></p>";  
        echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>".$pets[$row][$col]."</li>";
            }
            echo "</ul>";   
    }

    echo $pets[0][0] ." :"."cout :".$pets[0][1] ." " ."color :".$pets[0][2];
echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
?>
<br>
<br>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    Name: <input type="text" name="username"><br>
    Age : <input type="text" name="age"><br>
    <input type="submit" value="submit">
</form>
<?php
if (!empty($_REQUEST)) {
    $username = htmlspecialchars($_REQUEST['username']);
    $age = htmlspecialchars($_REQUEST['age']);
    if (empty($username) || empty($age)) {
        echo "အမည် သို့မဟုတ် အသက် ဗလာ ဖြစ်နေသည်။";
    } else {
        echo "Username: " . $username . "<br>";
        echo "Age: " . $age . "<br>";
    }
}

?>

<form action="/search" method="GET">
    <input type="text" name="query">
    <input type="submit" value="Search">
</form>

<center><h1>Regex</h1></center>

<?php
    $df = "15hi my n\name is58\nappA  Zbecie56";
    $pattern = "/^a/im";//  /i is just find don't care about uppercase of lowercase and /m is find another line 
    $pattern2 = "/hi/";
    $pattern3 = "/[0-9]$/m";//$ is find  the last of the line and 0-9 is between 0 and 9 same as a-z 
    $pattern4 = "/[Y-e]/";  

    echo preg_match($pattern , $df) . "<br>";//the answer is 1 because preg_match() is found 1 just stop there no more finding 
    echo preg_match_all($pattern , $df) . "<br>";//preg_match_all is find the all of containg in a sentence if you want to find the whole sentence don' forget to use preg_match_all()
    echo preg_replace($pattern2 , "hello" ,$df) . "<br>";//replace you know:)  
    echo preg_match_all($pattern3 , $df) . "<br>";
    echo preg_match_all($pattern4 , $df);//find between Z to e like (Y Z a b c d e )

    echo "<br><br>";

    $str = "Apples and bannanann \nbaNananannn ";
    $pattern = "/ba(n{1,2})/im";//grouping
    echo preg_match_all($pattern, $str);  // Outputs 2


?>
<br>
<script>
    for (x = 0 ; x <10 ; x++){
        if (x == 5)continue;
        
        document.write("the number is "+ x +"<br>");
    }
</script>
</body>
</html>