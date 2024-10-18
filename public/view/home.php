<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/home.css">
    <title>Home | Page</title>
    
</head>
<body>
 
    <div class="navbar">
        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
        <button class="logout-button" onclick="user_Logout()">Logout</button>
    </div>

    <h2 class="greeting">Hi! <?php echo htmlspecialchars($username); ?> </h2>
<h3 class="welcome">Welcome to Home Page</h3>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../lib/js/my.js"></script>
</html>
