<!-- <?php require "workset.php" ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="recieve.js"></script>
    <title>Feedback</title>
</head>

<body onload="givedata()">
    <div class="navigation">
        <a href="home1.php"><button>Back</button></a>
    </div>
    <h1 id="heading">Have any suggestions? Reach out to us</h1>
    <div class="container">
        <form >
            <h1>Feedback Form</h1>
            <input type="email" name="chkemail" id="chkemail" placeholder="Enter your email address" >
            <input type="text" name="chkname" id="chkname" placeholder="Enter your name" >
            <input name="message" id="message" placeholder="Enter your message here"></input>
            <button name="feedback" id="submit" onclick=pa()>SUBMIT</button>
            <!-- <input type="hidden" name="chkemail" id="chkemail" >
            <input type="hidden" name="chkname"  id="chkname" > -->
        </form>
    </div>


<!--     #################################     -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
            $(document).on("click", "#submit", function () {
                //get value of message 
                var message = $("#message").val();
                //check if value is not empty
                if (message == "") {
                    $("#error_message").html("Please enter message");
                    return false;
                } else {
                    $("#error_message").html("");
                }

                $.ajax({
                    type: "POST",
                    url: "workset.php",
                    data: {message: message},
                    cache: false,
                    success: function (data) {
                        //Insert data before the message wrap div
                        $(data).insertBefore(".message-wrap:first");
                        //Clear the textarea message
                        $("#message").val("");
                    }
                });
            });
        </script>

</body>

</html>
