<?php 
    require_once('../connection/db.php');
    session_start();
?>
<?php
    if(isset($_POST['comment-button']))
    { 
      $user_id=$_POST['user_id'];
      $username=$_POST['username'];
      $post_id=$_POST['post_id'];
      $post_name=$_POST['post_name'];
      $date=$_POST['date'];
      $time=$_POST['time'];
      $description=$_POST['description'];

      $query = mysqli_query($connection,"insert into comment (Description,User_ID,Username,P_ID,P_Name,Date,Time) values('$description','$user_id','$username','$post_id','$post_name','$date','$time')");
        if ($query) {
            echo 
            "<script>
                alert('Inserted succesfully');
                window.location.href='../comments/comment.php';
            </script>";
        }
        else {
            echo 
                "<script>
                    alert('something went wrong');
                </script>";
        }
    }
?>