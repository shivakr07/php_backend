<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <h2> Let's play more with PHP</h2>
        <?php
            $age = 20;
            if($age >= 18){
                echo "You are allowed to the club";
            }
            else{
                echo "You are not allowed to the club";
            }
            echo "<br>";
            //array [collection of items]
            $languages = array("python", "c++", "php", "js");
            // echo $languages;echo "<br>";  //logs Array  
            // echo $languages[0];echo "<br>"; //python
            // echo count($languages);

            //Loops
            // $a = 0;
            // while ($a <= 10) {
            //     echo "The value of a is : ";
            //     echo $a;
            //     $a++;
            //     echo "<br>";
            // }

            //iteration in array

            $a = 0;
            while ($a < count($languages)) {
                echo "The value of language is : ";
                echo $languages[$a];
                $a++;
                echo "<br>";
            }

            //for loop
            echo "<br>";
            echo "for loop";
            echo "<br>";
            for ($i=0; $i < count($languages); $i++) { 
                echo "The value of language is : ";
                echo $languages[$i];
                echo "<br>";
            }
            
            //for each
            echo "<br>";
            echo "foreach loop";
            echo "<br>";

            foreach($languages as $value) {
                echo "language is : ";
                echo $value;
                echo "<br>";
            }

            //function
            echo "<br>";
            echo "function";
            echo "<br>";

            function greet() {
                echo "Hello from function";
            }

            greet();

            //string
            echo "<br>";
            echo "strings and functions";
            echo "<br>";

            $st = "This is a string";
            echo $st . "<br>";
            $ln = strlen($st);

            // . operator is used for the concatenation of the strings
            echo "the length of the string is : ". $ln ." Thankyou <br>";
            echo "the number of words in the string is : ". str_word_count($st) ." Thankyou <br>";
            echo "the reversed string is : ". strrev($st) . " Thankyou <br>";
            echo "find substring in the string : ". strpos($st, "is"). " Thankyou <br>";
            echo "how to replace a word or char in string : ". str_replace("is", "at", $st). " Thankyou <br>";

        ?>
    </div>
</body>
</html>