<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <img src="mobile-removebg-preview.png" alt="">
    <div class="wrapper">
        <form action="">
            <h1 class="abc">Login as Voter</h1>
            <div class="input-box">
                <input type="text" placeholder="CRN Number" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forget">
                <label> <input type="checkbox">Remember me</label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="Registration.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>