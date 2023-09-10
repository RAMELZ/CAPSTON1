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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        }

        .button-container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <!-- Add your login form here -->
            
            <div class="button-container">
                <button onclick="location.href='login.php'">Login</button>
                <button onclick="location.href='register.html'">Register</button>
            </div>
        </div>
    </div>
</body>
</html>