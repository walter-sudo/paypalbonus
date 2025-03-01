<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .signup-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #003087;
        }
        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #003087;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-container button:hover {
            background-color: #002060;
        }
        .signup-container .login-link {
            margin-top: 20px;
            text-align: center;
        }
        .signup-container .login-link a {
            color: #003087;
            text-decoration: none;
        }
        .signup-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <img src="logo.png" alt="PayPal Logo" style="width: 100px; margin-bottom: 20px;">
        <h1>Create Account</h1>
        <form action="sign.php" method="POST">
            <input type="text" placeholder="First Name" name="fname" required>
            <input type="text" placeholder="Last Name" name="lname" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </div>
    </div>
</body>
</html>