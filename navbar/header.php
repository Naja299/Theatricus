<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <style>

            @import 'https://fonts.googleapis.com/css?family=Raleway';
                div.container{
                font-family: Raleway;
                margin: 0 auto;
                padding: 0.5em 0.5em;
                text-align: center;
            }
            div.container a{
                color: #FFF;
                text-decoration: none;
                font: 20px Raleway;
                margin: 0px 10px;
                padding: 10px 10px;
                position: relative;
                z-index: 0;
                cursor: pointer;
            }
            .back{
                background: #151815;
            }
             /* Border X get width  */
            div.borderXwidth a:before, div.borderXwidth a:after {
                position: absolute;
                opacity: 0;
                width: 0%;
                height: 2px;
                content: '';
                background: #FFF;
                transition: all 0.3s;
            }
            div.borderXwidth a:before {
                left: 0px;
                top: 0px;
            }
            div.borderXwidth a:after{
                right: 0px;
                bottom: 0px;
            }
            div.borderXwidth a:hover:before, div.borderXwidth a:hover:after{
                opacity: 1;
                width: 100%;
            }
     
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container back borderXwidth" id="navbarNav">
                <a href="../home/index.php">Home</a>
                <a href="../movies/index.php">Movies</a>
                <a href="../annoncements/index.php">Announcements</a>
                <a href="../reviews/index.php">Comments</a>
                <a href="../contactus/index.php">Contact Us</a>
                <a href="../aboutus/index.php">About Us</a>
                <a href="../comments/comment.php">My Dashboard</a>
                <a href="../index.html">Sign out</a>       
            </div>
        </nav> 
    </body>
</html>
