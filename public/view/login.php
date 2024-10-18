<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="../lib/css/login.css">
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
             <!-- Logo Image -->
             <div class="logo-container">
                <img src="../lib/images/purple-logo.png" alt="Logo" class="logo-image">
            </div>
            <p class="signup-text">Login</p>
            <!-- login form -->
            <form id="loginForm" class="login">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="identifier" class="login__input" placeholder="Username" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="Password" required>
                </div>
                <button type="button" class="login__submit" onclick="user_login()">
                    <span class="button__text">Login</span>
                </button>
                <p class="text" >Don't have an account? <a href="register.php" class="register-link">Register Here!</a></p>
            </form>
            
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>

    <!-- Left side  Text -->
    <!-- <div class="left-text">
        <div>
        <img src="../lib/images/logo.png" alt="Logo" class="image">
        </div>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    Why do we use it?
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    </p>
    </div> -->
  
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../lib/js/my.js"></script>
</body>
</html>  