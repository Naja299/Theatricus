<?php 
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
        <link rel="stylesheet" href="../movies/movies.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Movies</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Movie</li>
                </ol>
            </nav>
            <div class="viewmovie">
                <div class="row">
                    <?php
                        $postid=$_GET['view'];
                        $result=mysqli_query($connection,"select * from posts where P_ID='$postid'");
                        while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bigimage">
                            <img class="img" src="../../admin/movies/images/<?php echo $row['Image'];?>" alt="Poster">
                            <h3 class="movietitle"><?php echo $row['Name'];?></h3>              
                        </div>
                    </div>
                </div>
                <div class="side">
                    <table class="table table-bordered">               
                        <tr>
                            <th class="table_appointments">Catergory</th>
                            <td class="table_appointment"><?php echo $row['Catergory']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Cast</th>
                            <td class="table_appointment"><?php echo $row['Cast']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Language</th>
                            <td class="table_appointment"><?php echo $row['Language']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Duration</th>
                            <td class="table_appointment"><?php echo $row['Duration']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Appointment Time</th>
                            <td class="table_appointment"><?php echo $row['Time']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Ticket Price</th>
                            <td class="table_appointment"><?php echo $row['Price']; ?></td>
                        </tr>
                        <tr>
                            <th class="table_appointments">Status </th>
                            <td class="table_appointment"><?php
                                if($row['Status']=="showing")
                                    {
                                        echo "Now Showing";
                                    }    
                                if($row['Status']=="comingsoon")
                                    {
                                        echo "Coming Soon";
                                    }
                                    ;
                                    ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php } ?>
            </div>
                <div class="comments">
                    <h5 class="comments-title">Drop your comments</h5>
                    <form action="process.php" method="post">
                        <div class="row">
                            <?php
                                $userid=$_SESSION['User_ID'];
                                $result=mysqli_query($connection,"select * from users where user_id='$userid'");
                                while ($row=mysqli_fetch_array($result)) {
                            ?>
                            <div class="form-grp-comment">
                                <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $row['User_ID']; ?>" hidden>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $row['Username']; ?>"hidden>
                            </div>
                            <?php } ?>
                            <?php
                                $postid=$_GET['view'];
                                $result=mysqli_query($connection,"select * from posts where P_ID ='$postid'");
                                while ($row=mysqli_fetch_array($result)) {
                            ?>
                            <div class="form-grp-comment">
                                <input type="text" class="form-control" name="post_id" id="post_id" value="<?php echo $row['P_ID']; ?>"hidden>
                                <input type="text" class="form-control" name="post_name" id="post_name" value="<?php echo $row['Name']; ?>"hidden>
                            </div>
                            <?php } ?>
                            <div class="form-grp-comment">
                                <input type="text" name="date" id="date" value="<?php echo date("l jS \of F Y ");?>" hidden>
                                <input type="text" name="time" id="time" value="<?php echo date("h:i:s A");?>" hidden>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-grp-comment">
                                    <label class="description" for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" cols="" rows="5" placeholder="Enter the comments here" required></textarea>
                                </div>
                                <div class="comment-frm-button">
                                    <button type="submit" name="comment-button" class="comment-button" value="submit"> Share </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>              
        </div>
    </body>
</html>