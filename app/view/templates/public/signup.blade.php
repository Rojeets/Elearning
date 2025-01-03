<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="app/view/static/css/login.css">

    
</head>
<body>
    <div class="signup-box">
        <p>Sign Up</p>
        <form method="post">
            <div class="user box">
                <input required="" name="fullname" type="text"/>
                <label>Fullname</label>
            </div>
            <div class="user box">
                <input required="" name="contact" type="tel" pattern="[0-9]{10}"/>
                <label>Mobile Number</label>
            </div>
            <a href="dashboard.html"><button type="submit" class="signup-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Next
            </button></a>
        </form>
       <p>Already have an account? <a href="login.html" class="a2">Log in</a></p>

    </div>
</body>
</html>
