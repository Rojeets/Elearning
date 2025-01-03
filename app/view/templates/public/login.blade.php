
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="app/view/static/css/login.css">
</head>

<body>
    <div class="signup-box">
        <p>Log in</p>
        <form method="post" action="dashboard">
            <div class="user box">
                <input required="" name="username" type="text" id="username"/>
                <label>Email</label>
            </div>
            <div class="user box">
                <input required="" name="password" type="password" id="password"/>
                <label>Password</label>
            </div>
            <button type="submit" class="signup-button" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
            </button>
        </form>
        <p>Don't have an account? <a href="register" class="a2">Sign up!</a></p>
    </div>

</body>

</html>