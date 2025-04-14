<?php
    include "service/database.php";
    session_start();

    $login_notification = "";

    if(isset($_POST['login'])){
        $email = $_POST['username'];
        $password = $_POST['password'];
          
        $sqldata = "SELECT * FROM users 
                    WHERE username = '$email' AND password = '$password'";

        $result = $db->query($sqldata);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $_SESSION['username'] = $data['username'];
            $_SESSION["is_login"] = true;
            
            header("Location: dashboard.php");
        } else {
            $login_notification = "Login failed, please try again";
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

    <h3>Login to your account</h3>

    <i><?= $login_notification ?></i>
    <form action="login.php" method="POST">
        <input type="username" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="login">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php"> Register here</a></p>
</body>
</html>