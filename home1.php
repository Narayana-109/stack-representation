<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/home1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@600&display=swap" rel="stylesheet">
    <script src="recieve.js"></script>
    <title>Home Page</title>
</head>

<body onload="givedata()">
    <div id="heading">
        <center>Graphical Representation Of Stack Operations</center>
        <button><a href="./About.html">About Us</a></button>
    </div>
    <div class="main-wrap">
        <div id="container">
            <div class="stack" style="background-color: rgb(0, 0, 0);">S</div>
            <div class="stack" style="background-color: rgb(10, 10, 10);">T</div>
            <div class="stack" style="background-color: rgb(17, 17, 17);">A</div>
            <div class="stack" style="background-color: rgb(28, 28, 28);">C</div>
            <div class="stack" style="background-color: rgb(36, 36, 36);">K</div>
            <div class="stack" style="background-color: rgb(46, 46, 46);">S</div>
            <!-- <div class="stack" style="background-image: linear-gradient(#31738a,#9aeaf0);">S</div>
                <div class="stack" style="background-image: linear-gradient(#34829c,#a9edf1);">T</div>
                <div class="stack" style="background-image: linear-gradient(#3f8faa,#a8edf1);">A</div>
                <div class="stack" style="background-image: linear-gradient(#56b0ce,#a7ebf0);">C</div>
                <div class="stack" style="background-image: linear-gradient(#59b3d1,#baecf0);">K</div>
                <div class="stack" style="background-image: linear-gradient(#6ebfda,#cff5f8);">S</div> -->
        </div>
        <div class="operat">
            <div class="buttons">

                <a href="pushtopop.php"><button class="button">Push and Pop</button></a>
                <a href="inftopost.php"><button class="button">Infix to PostFix</button></a>
                <a href="inftopre.php"><button class="button">Infix to Prefix</button></a>
                <a href="pretopost.php"><button class="button">Prefix to Postfix</button></a>
                <a href="feedback.php"><button class="button">Feedback</button></a>
                <input type="hidden" name="chkemail" id="chkemail" >
                <input type="hidden" name="chkname"  id="chkname" >
            </div>
        </div>
    </div>
    <video id="myvideo" src="assets/Pexels Videos 2439510.mp4" autoplay loop muted></video>
    
    <script src="assets/homescript.js"></script>
</body>

</html>