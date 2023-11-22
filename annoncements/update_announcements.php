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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Annoncements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Annoncements</li>
                </ol>
            </nav>
            <h3 class="title">Update Annoncements</h3> 
            <div class="annoncementfrm">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                        $ann_id=$_GET['update'];
                        $result=mysqli_query($connection,"select * from annoncement where Ann_id='$ann_id'");
                        while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" class="form-control" value = "<?php echo $row['Topic'];?>" name="topic" id="topic" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"  value = "<?php echo $row['Description'];?>" id="description" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image</label>
                        <input type="file" class="ai" value = "<?php echo $row['Image'];?>" accept="images/*" name="image" id="image" required>
                    </div>
                    <div class="submit_btn">
                        <button type="submit" name="update_btn" class="submit_btn" value="submit">Update</button>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>