<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            echo "Hello World!";
            echo "<br>";
        ?>

        <?php
            //Variables
            $var1 = 10;
            $var2 = 45;
            echo "value of var1 is : ";echo "<br>"; echo $var1; echo "<br>";
            echo "value of var2 is : ";echo "<br>";echo $var2; echo "<br>";
            //Operators in PHP
            //Arithmetic Operators

            echo "the value of variable1 + variable2 is : ";
            echo "<br>";
            echo $var1 + $var2 ;
            echo "<br>";
            echo "the value of variable1 - variable2 is : ";
            echo "<br>";
            echo $var1 - $var2 ;

            $var1 += 5;
            echo "<br>";
            echo "new value of var1 is : ";echo "<br>";echo $var1;

            //boolean
            echo "<br>";
            echo var_dump(1 >= 4);
        ?>
    </div>
</body>
</html>