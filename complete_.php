<!-- simple print syntax -->
<?php
echo "Shiva";
?>

<!-- variables : stores information-->
<?php
$name = "alan"; 
echo "<br>";
echo $name;
echo "<br>";
?>

<!-- datatypes -->
<?php
$x = 10;
var_dump($x);  //int(10)
echo "<br>";

$x = "alan";  //string
var_dump($x);
echo "<br>";

$x = 1.0;
var_dump($x); //float
echo "<br>";

$x = true;
var_dump($x);  //boolean
echo "<br>";
?>


<!-- string : sequence of characters -->
<?php
$name =  "Alan";
echo "Hello my name is $name"  // $name --> Alan
//in single '' $name is not treated like variable
echo 'Hello my name is $name'  //$name -> $name

//for len of string
echo strlen($name);

//to count no of words in string
echo str_word_count($name);

//to find the postition of a or substring n string
echo strpos($name, "A");

//to make first chr capital
echo ucfirst($name);

// each word first char capital
echo ucwords($name);

//to make upper case
echo strtoupper($name);

// to make lower 
echo strtolower($name);


//to concatenate two strings
$fname = "alan";
$lname = "walker";
echo $fname. ' '. $lname;
?>

<!-- Operators -->

<?php
// arithematic operators
$x = 10;
$y = 20;

echo $x + $y;
echo $x - $y;
echo $x / $y;
echo $x * $y;
echo $x % $y;

//assignment operators
$x += $y;
echo $x;

//increment operator
$a = 10;
echo $a++;
echo ++$a;

?>


<!-- Comparison and control structures -->
<?php
$a = '10';
if($x == 10) {
    echo "Yes";
}

if($x == 10){
    echo "Yes";
}

if($x === 10){
    echo "Yes";
}
// ===  : checks type and value

?>

<!-- Loops -->
<?php
for($i = 0; $i < 10; $i++){
    echo 2 * $i;
    echo "<br/>";
}

$x = 0;
while($x < 10){
    echo $x * 2;
    $x++;
    echo "<br/>";
}

$i = 1;
do{
    echo 2 * $i;
    $i++;
    echo "<br/>";
}while($i < 10)
?>

<!-- Constants : no need or $-->
<?php
define('NUM', 10);

// define('NUM', 20); //gives error : modification is not allowed
echo NUM;
?>


<!-- --------------------------------------------  -->
<!-- Array -->
<?php


$arr = array(10,20);
var_dump($arr) //array(0){}

// echo $arr ;  // gives array because it can't convert array in string

echo '<pre';  // formats the output of array
print_r($arr); // Array([0] => 10 [1] => 20)
//index array


// foreach loop
$ar = array("Alan", "Amit");
foreach($ar as $item) {
    echo $item;
    echo "<br/>";
}
//if you want indexes and value
foreach($ar as $key=>$val){
    echo $key;
    echo $val;
    echo "<br/>";
}

//associative array [key value form]
$arr = array("name"=>"shiva", "gender"=>"male");
echo '<pre';
print_r($arr);

//using foreach is same
foreach($ar as $key=>$val){
    echo $key;
    echo $val;
    echo "<br/>";
}

echo $arr['name'];  //using keys
echo $ar['1'];      //using indexes


//multidimensional array [one array inside another]
$arr = array("student1" => array(
    "name" => "shiva", "city" => "delhi", "subject" => array(
        "english","hindi"
    )
));
echo "<pre>";
print_r($arr);

/*
<pre>Array
(
    [student1] => Array
        (
            [name] => shiva
            [city] => delhi
            [subject] => Array
                (
                    [0] => english
                    [1] => hindi
                )

        )

)
*/
print_r($arr['student1']['subject']);
/*
Array
(
    [0] => english
    [1] => hindi
)
*/
?>

<!-- functions of array -->
<?php
$ar = array("Alan", "Amit", "vishal");

//count
echo count($ar);

//sort
sort($ar);
print_r($ar);

// reverse sorting
ksort($ar);
print_r($ar);
?>