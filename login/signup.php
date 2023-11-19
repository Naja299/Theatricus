<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- <script type="text/javascript" src="../js/register.js"></script> -->
        
        <link rel="stylesheet" href="../login/LogIn.css">
        <title>Sign Up Page </title>

    </head>
    <body>
        <div class="login-box">
            <h2>Sign UP</h2>
            <form action="process.php" name="register" onsubmit="return formvalidate()" method="post"> 
                <div class="user-box">
                    <input type="text" name="name" id="name" required="">
                    <label class="label-login_form" for="username" >Full Name</label>
                </div>
                <div class="user-box">
                    <input type="email" name="email" id="email" required="">
                    <label class="label-login_form" for="email">E-Mail</label>
                </div>
                <div class="user-box">
                    <input type="text" name="username" id="username" required="">
                    <label class="label-login_form" for="username">User Name</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="password"  required="">
                    <label class="label-login_form" for="password">Password</label>
                </div>
                <button class="sgn" type="submit" value="submit" name="create_account">Sign Up</button>
                <a href="index.php">Back To LogIn</a> 
            </form>
        </div>
    </body>
</html>