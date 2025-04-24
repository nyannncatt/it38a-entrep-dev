<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div>
            <input type="text" name="UserName" placeholder="Username" required>
        </div>
        <div>
            <input type="password" name="Password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <p>
        Don't have an account? <a href="registration.html">Register here.</a>
    </p>
</div>

</body>
</html>
