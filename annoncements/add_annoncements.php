<?php
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
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Annoncements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Annoncements</li>
                </ol>
            </nav>
            <h3 class="title">Add Annoncements</h3> 
            <div class="annoncementfrm">
                <form action="process.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="topic">Topic<span class="required">*</span></label>
                        <input type="text" class="form-control" name="topic" id="topic" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description<span class="required">*</span></label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image<span class="required">*</span></label>
                        <input type="file" class="ai" accept="images/*" name="image" id="image" required>
                    </div>
                    <div class="submit_btn">
                        <button type="submit" name="submit_btn" class="submit_btn" value="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>