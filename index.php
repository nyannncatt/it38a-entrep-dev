<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex; /* Corrected to flex */
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .container {
            background-color: white;
            padding: 40px 50px; /* Increased padding for more rectangular shape */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 600px; /* Increased max width for more rectangle shape */
            min-width: 400px; /* Set a minimum width to keep the rectangle consistent */
        }

        .form-group {
            margin-bottom: 20px; /* Slightly more space between form elements */
        }

        input {
            padding: 12px; /* Increased padding for better input appearance */
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 12px 20px; /* Increased button padding */
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .redirect {
            margin-top: 20px; /* Increased spacing for better visual balance */
        }

        #changeButton {
            position: fixed;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            width: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <input type="text" name="UserName" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" name="Password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <p class="redirect">
        Don't have an account? <a href="registration.html">Register here.</a>
    </p>
</div>

<button id="changeButton">Change Theme</button>

<script src="toggle picture.js"></script>
</body>
</html>
