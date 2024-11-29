<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="register-container">
    <div class="logo-container">
        <img src="me.png" alt="Logo" class="logo">
    </div>
    <div class="register-box">
        <button class="close-button">&times;</button>
        <h2>Sign Up</h2>
        <form action="register.php" method="POST" onsubmit="return validateRegisterForm()">
            <h5 class="N">Full Name</h5>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
            <h5 class="E">Email</h5>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <h5 class="U">Username</h5>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <h5 class="P">Password</h5>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <h5 class="CP">Confirm Password</h5>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            <button type="submit" class="register-button">Sign Up</button>
            <p class="login-text">Already have an Account? <a href="login.html">Log in</a>.</p>
        </form>
    </div>
</div>
<script>
    function validateRegisterForm() {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;

        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        // Validate password (same pattern as login page)
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
