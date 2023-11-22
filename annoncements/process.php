<?php 
    require_once('../connection/db.php');
?>
<?php 
    if(isset($_POST['submit_btn']))
    {
        $topic=$_POST['topic'];
        $description=$_POST['description'];

        //file
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_loc = $file['tmp_name'];
        $file_store = "images/".$file_name;

        move_uploaded_file($file_temp_loc,$file_store);

        

        $query = mysqli_query($connection,"insert into Annoncement (Topic,Description,Image) values('$topic','$description','$file_name')");
      if ($query) {
        echo 
        "<script>
            alert('SucessFully Added');
            window.location.href='index.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('Something went wrong');
            window.location.href='add_annoncements.php';
        </script>";
        }
    }
?>

<?php 
    require_once('../connection/db.php');
?>
<?php 
    if(isset($_POST['update_btn']))
    {
        $topic=$_POST['topic'];
        $description=$_POST['description'];

        //file
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_loc = $file['tmp_name'];
        $file_store = "images/".$file_name;

        move_uploaded_file($file_temp_loc,$file_store);

        
        $ann_id=$_GET['update'];
        $query = mysqli_query($connection,"update Annoncement set Topic = '$topic', Description = '$description',Image = '$file_name' where Ann_id ='$ann_id'");
      if ($query) {
        echo 
        "<script>
            alert('SucessFully Added');
            window.location.href='index.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('Something went wrong');
            window.location.href='update_annoncements.php';
        </script>";
        }
    }
?>
