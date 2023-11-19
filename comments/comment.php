<?php 
    include_once('../navbar/header.php');
    require_once('../connection/db.php');
    session_start();
?>

<?php
    if(isset($_GET["Delete"])){
        $sql1="Delete from comment where C_ID=".$_GET["Delete"];
        $result2 = mysqli_query($connection,$sql1);

        if($sql1){
            echo "SuccessFully Deleted";
        }
        else{
            echo "Something went Wrong";
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
        <div class="container-fluid">
            <h3 class="title"> Comments</h3>
            <table class="table">
                <thead Class="tt">
                    <tr >
                        <th scope="col">NO</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">POST NAME</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $userid=$_SESSION['User_ID'];
                        $query=mysqli_query($connection,"select * from `Comment`where User_ID = '$userid'");
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['C_ID']; ?></th>
                            <td><?php echo $row['Description']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                            <td><?php echo $row['Time']; ?></td>
                            <td>
                                <?php  
                                    if($row['Status']=="1")
                                        {
                                            $approved='<div class="text-success">Approved</div>';
                                            echo $approved;
                                    };
                                    if($row['Status']=="2")
                                        { 
                                            $rejected='<div class="text-danger">Rejected</div>';
                                            echo $rejected;
                                    };

                                    if($row['Status']=='')
                                        { 
                                            $pending_approval='<div class="text-warning">Pending Approval</div>';
                                            echo $pending_approval;
                                    };
                                                                            
                                ?>
                            </td>
                            <td><?php echo $row['P_Name']; ?></td>
                            <td>
                                <a class="link" href="../comments/edit_comment.php?edit=<?php echo $row["C_ID"];?>">Edit</a> &nbsp
                                <a class="link" href="../comments/comment.php?Delete=<?php echo $row["C_ID"];?>">Delete</a>   
                            </td>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div> 
    </body>
</html>