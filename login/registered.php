<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Registered Page </title>
        <style>
            body {
                font-family: sans-serif;
                background-size: cover;
                position: relative;
                text-align: center;
                background-image: url(https://townsquare.media/site/690/files/2020/06/popcorn-razihusin.jpg);
            }
            h5{
                text-align: center;
                padding: 70px;
                font-size: 36px;
                color: black;
            }
            .btn-signup{
                width: 150px;
                padding: 5px;
                background-color: white;
                color: #03e9f4;
            }
            .btn-signup:hover {
                background: rgb(247, 244, 244);
                color: black;
                border-radius: 5px;
            }
            .btn-signup span {
                position: absolute;
                display: block;
            }
            .btn-signup span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #03e9f4);
                animation: btn-anim1 1s linear infinite;
            }
        </style>
    </head>
    <body>
        <h5>Thank You ! Successfully Registered.</h5>
        <a class="btn-signup" href="index.php">Back to login</a>
    </body>
</html>