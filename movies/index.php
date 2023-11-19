<?php 
    require_once('../connection/db.php');
    include_once('../navbar/header.php');
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
            <div class="movies">
                <div class="row">
                    <?php
                        $query=mysqli_query($connection,"select * from `posts` order by Date DESC");
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <figure class="movieimage">
                            <img class="img-fluid" src="../../admin/movies/images/<?php echo $row['Image'];?>" alt="Poster">
                            <figcaption>
                                <h2>Watch <span>Movie</span> <i>Now</i></h2>
                                <a href="viewposts.php?view=<?php echo $row["P_ID"];?>"></a>	
                            </figcaption>			
                        </figure>  
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>
