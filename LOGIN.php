<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-image: url('https://scontent-mnl1-1.xx.fbcdn.net/v/t39.30808-6/308759994_500706102066994_492544369208935949_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=52f669&_nc_eui2=AeG5WjQ11_sIsESHQif0CDKPRr4B5Zz9cZ5GvgHlnP1xnq5GDsUava7wm-1YcYoIoz3qi1SXLenM3BVcwGdC1ezc&_nc_ohc=snf7z1ShUAAAX98Wyqo&_nc_ht=scontent-mnl1-1.xx&oh=00_AfDT97jy8US_QltBAwYLljZOV79W9RvLt8Idyd4vfFNRIw&oe=64FE007C'); /* Replace 'background.jpg' with your image URL */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        h2 {
            text-align: center;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .input-group input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" action="#" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    <script>
        // JavaScript code for handling form submission
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // You can add your login logic here.
            // For this example, we'll just display an alert.
            alert("Login successful!");
        });
    </script>
</body>
</html>
