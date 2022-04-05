<?php require "workset.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="recieve.js"></script>
    <title>Practise</title>
    <style>
        .stack{
            font-size: 60px;
        }
    </style>
</head>
<body onload="givedata()">
    <div class="navigation">
        <a href="home1.php"><button>Back</button></a>
        <form method="POST" action="" >
        <button name="reset" id="reset">Reset</button>
    </div>
    <div id="container">
    </div>
    <div class="operat">
        <div id="control">
            <button id="pause">Pause</button>
            <button id="play">Play</button>
        </div>
        <div class="buttons">
            <input type="text" name="preinput" id="num" placeholder="Enter the Prefix Expression">
            <input type="text" name="postout" id="pre" placeholder="Postfix Expression">
            <button id="push" name="pretopo" onclick="start_conversion()">Evaluate</button>
            <input type="hidden" name="chkemail" id="chkemail" >
            <input type="hidden" name="chkname"  id="chkname" >
        </div>
    </div>
    </form>

    <script src="assets/pushpopgeneralpurpose.js"></script>
    <script src="assets/pre_post.js"></script>r

</body>

</html>
