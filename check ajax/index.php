<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insert and load records using Jquery,Ajax and Php without refreshing page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            .error{
                color:red;
                font-size:13px;
            }
            .message-wrap{
                background: #e6ecf0;
                color: #000;
                padding: 15px;
                margin-top:10px;
                margin-bottom: 10px;
            }
            .dn{
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">Live Demo: Insert and load records using Jquery,Ajax and Php without refreshing page</h2>
                <div class="form-group">
                    <label for="email">What are you doing today?</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                    <div class="error" id="error_message"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" id="save">Save</button>
                </div>

                <div class="display-content">

                    <div class="message-wrap dn">                      
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).on("click", "#save", function () {
                //get value of message 
                var message = $("#message").val();
                //check if value is not empty
                if (message == "") {
                    $("#error_message").html("Please enter message");
                    return false;
                } else {
                    $("#error_message").html("");
                }
                //Ajax call to send data to the insert.php
                $.ajax({
                    type: "POST",
                    url: "insert.php",
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