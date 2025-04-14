<?php
    include "service/database.php";
    session_start();

    $register_notification = "";

    if(isset($_POST['register'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqldata = "INSERT INTO users (fullname, email, username, password) 
                VALUES ('$fullname', '$email', '$username', '$password')";
        if($db->query($sqldata) === TRUE){
            $register_notification = "Account created successfully";
        }else{
            $register_notification = "Account registration failed, try register your account again";
        }
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
    <?php include "layout/header.html"?>   
    <h3>Create your account here</h3>
    <i><?= $register_notification?></i>
    <form action = "register.php" method="POST">
        <input type="text" placeholder="fullname" name="fullname"/>
        <input type="email" placeholder="email" name="email" required/>
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password" required/>
        <input type="password" placeholder="confirm password" name="confirm_password" required/>
        <button type="submit"name = "register">Create account</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>