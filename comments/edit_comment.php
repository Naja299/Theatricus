<?php 
    require_once('../connection/db.php');
?>
<?php
    if(isset($_POST['edit_comment']))
    {
      $description=$_POST['description'];
      $status=$_POST['status'];
      $date=$_POST['date'];
      $time=$_POST['time'];

      $query=mysqli_query($connection,"update comment set Description = '$description',Status = '$status',Date = '$date',Time = '$time'  WHERE C_ID='" . $_GET["edit"] . "'");
        if($query){
            echo 
      "<script>
          alert('Updated Successfully');
          window.location.href='../comments/comment.php';
      </script>";
      }
    else{
      echo 
      "<script>
          alert('something went wrong');
          window.location.href='../comments/edit_comment.php';
      </script>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../comments/comment.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../comments/comment.php">My Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Comment</li>
                </ol>
            </nav>
            <h3 class="title">Update Comment</h3> 
            <?php
                $cid=$_GET['edit'];
                $result=mysqli_query($connection,"select * from comment where C_ID='$cid'");
                while ($row=mysqli_fetch_array($result)) {
            ?>
            <div class="editcomment">
                <h5 class="t1">CURRENT COMMENT :</h5>
                <p><?php echo $row['Description'];?></p>
            </div>
            <?php } ?>

            <div class="updatecommentfrm">
            <h5>NEW COMMENT :</h5>
                <form action="" method="post">
                    <div class="form-grp-comment">
                        <label class="description" for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5" value="<?php echo $row['Description'];?>" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="status" id="status" hidden>
                        <input type="text" name="date" id="date" value="<?php echo date("l jS \of F Y ");?>" hidden>
                        <input type="text" name="time" id="time" value="<?php echo date("h:i:s A");?>" hidden>
                    </div>
                    <div class="edit_comment_btn">
                        <button type="submit" value="submit" name="edit_comment" class="edit_comment">
                            <a class="edit_comment_btn_1">Update</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>