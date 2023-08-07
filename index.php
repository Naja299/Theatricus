<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../login/LogIn.css">
        <title>Login Page </title>
    </head>
    <body>    
        <div class="login-box">
            <h2>Log In</h2>
            <form action="process.php" name="login" onsubmit="return formvalidate()" method="post"> 
                <div class="user-box">
                    <input type="text" name="username" id="username" required="">
                    <label class="label-login_form" for="username" >Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="password" required="">
                    <label lass="label-login_form" for="password">Password</label>
                </div>
                <button class="sgn" type="submit" value="submit" name="sign_in">Sign In</button>
                <a href="signup.php">Create an account</a> 
            </form>
        </div>
    </body>
</html>
