<?php
    require_once('../connection/db.php');
    session_start();
    
?>
<?php
    if(isset($_POST['sign_in']))
    {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $_SESSION['Username']=$username;

      $query="select User_ID from users where Username='$username' && Password='$password'";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count = mysqli_fetch_array($result);
       if($count >0){
        $_SESSION['User_ID']=$count['User_ID'];//Setting the Session To get the User id 
          echo 
            "<script>
                alert('Login successfully');
                window.location.href='../home/index.php';
            </script>";
         }
        else{
            echo 
            "<script>
                alert('Login Credentials do not match');
                window.location.href='index.php';
            </script>";
        }
    }
    
?>
<?php
    if(isset($_POST['create_account']))
    {
      $name=$_POST['name'];
      $username=$_POST['username'];
      $email=$_POST['email']; 
      $password=$_POST['password'];
      $query = mysqli_query($connection,"insert into users (Name,Username,Email,Password) values('$name','$username','$email','$password')");
      if ($query) {
        echo 
        "<script>
            window.location.href='registered.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('Username is already taken');
            window.location.href='register.php';
        </script>";
        }
    }
?>