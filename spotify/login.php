<?php
if(isset($_POST['first_name'])){


$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection failed due to". mysqli_connect_error());
}

echo "Success connecting to the database";



$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "    INSERT INTO `spotify`.`login` (`first_name`, `last_name`, `email`, `password`, `dt`) 
     VALUES ('$firstname', '$lastname', '$email', '$password', current_timestamp());";


if($con->query($sql) == true){
    echo "Successfully inserted";
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spotfiy login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
        <div class="outerbox">
            <!-- <img src="img/bg.jpg" alt="image"> -->

            <div class="innerbox1">
                <div class="mainbox">
                    <div class="start">
                        <h2>Please enter your details and register...</h2>
                    </div>
                    <form action="login.php" method="post">
                    <div class="text 0">
                        <h3>First Name</h3>
                        <input id="change" name="first name" type="text" placeholder="    First Name">
                    </div>
                    <div class="text 1">
                        <h3>Last Name</h3>
                        <input id="change" name="last name" type="text" placeholder="    Last Name">
                    </div>
                    <div class="text 2">
                        <h3>Mail id</h3>
                        <input id="change" name="email" type="email" placeholder="   Mail id">
                    </div>
                    <div class="text 3">
                        <h3>Password</h3>
                        <input id="change" name="password" type="password" placeholder="    Password">
                    </div>
                    <div>
                        <button id="submit" type="submit">Submit</button>
                    </div>

                    </form>
                    
                </div>
               
            </div>

            <div class="innerbox2">
                <img src="img/bg.jpg" alt="image">
            </div>

        </div>
    </main>




</body>
</html>