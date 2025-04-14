<?php
    session_start(); 
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
    
    <h2 class="login-success">Welcome, <?= $_SESSION['username'] ?>👋🏻</h2> 
</body>
</html>