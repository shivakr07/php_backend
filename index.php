<?php
if(isset($_POST['name'])){
//connect to mysql db  [mysqli[procedural/functional php programming] or [object oriented php]]
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this db failed due to ". mysqli_connect_error());
}
// echo "Successfull db connection"
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ($name, $age, $gender, $email, $phone, $desc, current_timestamp());";
echo $sql;

if($con->query($sql) == true){
    echo "successfully inserted"
}
else{
    echo "ERROR: $sql <br> $con->error"
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Welcome to the Disney Land Trip</h3>

    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone ">

        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information"></textarea>
        <button class="btn" type="submit">Submit</button>
        <button class="btn">Reset</button>

        <script src="index.js"></script>


    </form>
</body>
</html>