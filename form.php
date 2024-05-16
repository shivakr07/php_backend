
<?php

if(isset($_POST['submit'])){
echo'<pre>';
print_r($_POST);

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
// print_r($_GET);
echo $num1 + $num2 ;
}
?> 

<form method="post">
    <input type="textbox" name="num1"/> <br/>
    <input type="textbox" name="num2"/> <br/>
    <input type="submit" name="submit"/>
<form> 


