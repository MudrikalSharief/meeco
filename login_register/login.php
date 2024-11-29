<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
<div class="login-container">
        <div class="logo-container">
            <img src="me.png" alt="Logo" class="logo">
        </div>
        <div class="login-box">
            <button class="close-button">&times;</button>
            <h2>Log in</h2>
            <form action="login.php" method="POST" onsubmit="return validateForm()">
            <h5 class="E">Email or Username </h5>  
            <input type="text" id="username" name="username" placeholder="Email or Username" required>
            <h5 class="P">Password </h5>     
            <input type="password" id="password" name="password" placeholder="Password" required>
                <a href="#" class="forgot-password">Forgot Password?</a>
                <button type="submit" class="login-button">Log In</button>
                <p class="signup-text">Don't have an Account yet? <a href="register.php">Sign up</a>.</p>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Validate username or email
            if (username.length < 5) {
                alert("Username or Email must be at least 5 characters long.");
                return false;
            }

            // Regular expression to check if input is an email
            const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
            if (!emailPattern.test(username) && username.indexOf(' ') !== -1) {
                alert("Username cannot contain spaces.");
                return false;
            }

            // Validate password (at least 8 characters, including a number, uppercase and lowercase letters)
            const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if (!passwordPattern.test(password)) {
                alert("Password must be at least 8 characters long, and include at least one uppercase letter, one lowercase letter, and one number.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
