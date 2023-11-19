<?php
    require_once('../connection/db.php');
    session_start();
?>
<?php 
    if(isset($_POST['contact-button'])){
        
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $description=$_POST['message'];

        $query = mysqli_query($connection,"insert into contact (Name,Email,Subject,Description,User_ID) values('$name','$email','$subject','$description','$user_id')");
      if ($query) {
        echo 
        "<script>
            alert('Successfully Contacted');
            window.location.href='../home/index.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('something went wrong');
            window.location.href='index.php';
        </script>";
        }
    }
?>