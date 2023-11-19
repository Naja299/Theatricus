<?php 
    include_once('../navbar/header.php');
    require_once('../connection/db.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../contactus/contactus.css">
        <title>Contact Us</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 contact-form">
                    <div class="text-center">
                        <h3 class="title">Get in Touch</h3>
                    </div>
                    <form action="process.php" method="post">
                        <?php
                            $userid=$_SESSION['User_ID'];
                            $result=mysqli_query($connection,"select * from users where user_id='$userid'");
                            while ($row=mysqli_fetch_array($result)) {
                        ?>
                            <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $row['User_ID']; ?>" hidden>

                        <?php } ?>
                        <div class="form-group">
                            <input name="name" type="text" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" placeholder="Email" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" placeholder="Subject" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Type your message here" class="form-control" id="" cols="30" rows="3" required></textarea>
                        </div>
                        <button type="submit" name = "contact-button" class="btn btn-primary submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>