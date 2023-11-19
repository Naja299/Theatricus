<?php 
    include_once('../navbar/header.php');
    require_once('../connection/db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../annoncements/annoncements.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="annoncements">
                <?php
                    $result=mysqli_query($connection,"select * from Annoncement where status='1'");
                    while ($row=mysqli_fetch_array($result)) {
                ?>
               
                        <div >
                            <img class="img" src="../../admin/annoncements/images/<?php echo $row['Image'];?>" alt="">
                            <h6 class="a-tp"><?php echo $row['Topic'];?></h6>
                            <p class="a-ds"><?php echo $row['Description'];?></p>
                        </div>
           
                <?php } ?>
            </div>
        </div>
    </body>
</html>