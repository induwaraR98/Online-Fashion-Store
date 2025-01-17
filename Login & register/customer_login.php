
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">

    
</head>
<body>

    <div class="container">
        <div class="box form-box">
        <form action="" method="post">
            <header>Login</header>
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="field">
                
                <input type="submit" class="btn" name="submit" value="Login" required>
                
            </div>
            <div class="links">
                Don't have account? <a href="\Online Fashion Store\User profile and register\register.php">Sign Up Now</a> 
                <!-- this will redirect to the register pagee -->
               
            </div>
            <div class="links">
                <a href="admin_login.html">Login as Admin</a>
            </div>
        </div>
        </form>
    </div>

    <div class="field">
                
        <a href="\Online Fashion Store\Home page\Homepage.php"><input type="button" class="btn" name="submit" value="Home"></a>

        
    </div>


    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();

            // Define the required password criteria
            const requiredLength = 8; // Minimum password length
            const requiredCharacters = /[A-Za-z]/; // At least one alphabetic character
            const requiredNumbers = /[0-9]/; // At least one numeric character

            // Get the password input value
            const password = document.getElementById("password").value;

            // Verify the password meets the required criteria
            if (password.length < requiredLength) {
                alert(`Password must be at least ${requiredLength} characters long.`);
            } else if (!requiredCharacters.test(password)) {
                alert("Password must contain at least one alphabetic character.");
            } else if (!requiredNumbers.test(password)) {
                alert("Password must contain at least one numeric character.");
            } else {
                alert("Password meets the required criteria.");
                // Redirect to home.html upon successful login
                window.location.href = "home.html";
            }
        });
    </script>


</body>
</html>

