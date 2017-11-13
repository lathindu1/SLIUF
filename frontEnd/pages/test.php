
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SLIUF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <style>
        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        select {
            width: 100%;
            background-color: transparent;
            font-size: 20px;
            padding-top: 1.8%;
            padding-bottom: 1.8%;
             color: #a0b3b0;
             font-weight: bold;
        }
        option {
            background-color:rgba(19, 35, 47, 0.9) ;
                color: #a0b3b0;

        }
    </style>
        <?php

            session_start();


            $pass= $_SESSION['pass'];
            $uname = $_SESSION['index'];


            echo "index".$uname."<br/>";
            echo "pass".$pass."<br/>";
        ?>

        <div>
            <a href="">
        <img
    </a>
        </div>
</head>