<!--db.php-->
<?php
// $connection = mysqli_connect("localhost", "root", "" , "theater");
    $connection = mysqli_connect("localhost", "root", "" , "theater", 3307);
    if(!$connection)
    {
	    echo "Database connection failed...";
    }
?>
