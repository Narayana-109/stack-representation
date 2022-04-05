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
    <title>Practise</title>
    <script src="recieve.js"></script>
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
            <input type="text" name="infixvalue" id="num" placeholder="Enter the Infix Expression">
            <input type="text" name="post" id="post" placeholder="Postfix Expression" onchange="changed()">
            <button id="push" name="intopo" onclick="InfixtoPostfix()" >Evaluate</button>
            <input type="hidden" name="chkemail" id="chkemail" >
            <input type="hidden" name="chkname"  id="chkname" >
        </div>
        </div>
    </form>
    
    <!-- <script src="assets/script.js"></script> -->
    <script src="assets/inf_post.js"></script>
    <script src="assets/pushpopgeneralpurpose.js"></script>

</body>
</html>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#push').click(function(event){
			event.preventDefault();
			var	inf = $('#num').val();
			var	post = $('#post').val();
			var	em = $('#chkemail').val();
			var	nm = $('#chkname').val();
			$.ajax({
			    type: "POST",
			    url: "workset.php",
			    data: { chkname:nm, chkemail:em, infixvalue:inf, post:post },		    
			    dataType: "json"
			    // success: function(result){
			        
			    // }
			});
		});
	});
</script> -->