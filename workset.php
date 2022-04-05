<!-- getting name and email from entry page -->
<!-- <script>
    window.addEventListener('load',() =>{
    var email=localStorage.getItem('EMAIL');
    var name=localStorage.getItem('NAME');
})
</script> -->

<!-- PHP to MySQL -->
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'stackpack');
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
echo'connected';

// /////////////////////////////////////////////////////////////////////////////////////////
// reset to record 

if(isset($_POST['reset']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="reset";
        @$input="NULL";
        @$output="NULL";
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input','$output')";
            if(mysqli_query($conn,$query))
          {
            //     echo'<script type="text/javascript">alert("insertion successful")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
             }
          }

// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for infix to postfix

if(isset($_POST['intopo']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="infix to postfix";
        @$input=$_POST['infixvalue'];
        @$output=$_POST['post'];
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input','$output')";
            if(mysqli_query($conn,$query))
          {
            //     echo'<script type="text/javascript">alert("insertion successful")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
             }
          }

// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for infix to prefix

if(isset($_POST['intopre']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="infix to prefix";
        @$input=$_POST['infinput'];
        @$output=$_POST['preout'];
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input','$output')";
            if(mysqli_query($conn,$query))
          {
            //     echo'<script type="text/javascript">alert("insertion successful")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
             }
          }

// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for prefix to postfix

if(isset($_POST['pretopo']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="prefix to postfix";
        @$input=$_POST['preinput'];
        @$output=$_POST['postout'];
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input','$output')";
            if(mysqli_query($conn,$query))
          {
            //     echo'<script type="text/javascript">alert("insertion successful")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
             }
          }

          
// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for push 

if(isset($_POST['push']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="push";
        @$input1=$_POST['num'];
        @$output="NULL";
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input1','$output')";
            if(mysqli_query($conn,$query))
            {
            //  echo'<script type="text/javascript">alert("insertion success")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
            }
    }


// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for push 

if(isset($_POST['pop']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$operation="pop";
        @$input1="dummy";
        @$output="NULL";
        
        $query = "INSERT INTO record (namer,emailr,operationr,inputr,outputr)
        VALUES ( '$name','$email','$operation','$input1','$output')";
            if(mysqli_query($conn,$query))
            {
            //     echo'<script type="text/javascript">alert("deletion successful")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("deletion failed")</script>';
            }
          }

          
         // // /////////////////////////////////////////////////////////////////////////////////////////
          // // update to temp purestack for pop 
          
          if(isset($_POST['pop']))
              {
                  // @$id=$_POST['$cnt'];
                  // @$input1="NULL";
                  // @$output1=$_POST['postout'];
                  
                  $query = "UPDATE record SET inputr= (SELECT inputpp FROM purestack
                   WHERE id=(SELECT max(id) 
                   FROM record LIMIT 1)) WHERE idr=(SELECT max(idr))";
                      if(mysqli_query($conn,$query))
                      {
                    //       echo'<script type="text/javascript">alert("deletion successful")</script>';
                    //   }
                    //   else{
                    //       echo'<script type="text/javascript">alert("deletion failed")</script>';
                      }
                    }

            // /////////////////////////////////////////////////////////////////////////////////////////
            // insertion to temp purestack for push 
            
            if(isset($_POST['push']))
                {
                    // @$id=$_POST['$cnt'];
                    @$input1=$_POST['num'];
                    
                    $query = "INSERT INTO purestack (inputpp)
                    VALUES ( '$input1')";
                        if(mysqli_query($conn,$query))
                        {
                        //     echo'<script type="text/javascript">alert("insertion successful")</script>';
                        // }
                        // else{
                        //     echo'<script type="text/javascript">alert("insertion failed")</script>';
                        }
                      }
          
    // // /////////////////////////////////////////////////////////////////////////////////////////
    // // insertion to temp purestack for pop 
                    
          if(isset($_POST['pop']))
              {
                  // @$id=$_POST['$cnt'];
                  // @$input1="NULL";
                  // @$output1=$_POST['postout'];
                  
                  $query = "DELETE FROM purestack
                   WHERE id=(SELECT max(id) 
                   FROM record LIMIT 1)";
                      if(mysqli_query($conn,$query))
                      {
                    //       echo'<script type="text/javascript">alert("deletion successful")</script>';
                    //   }
                    //   else{
                    //       echo'<script type="text/javascript">alert("deletion failed")</script>';
                      }
                    }

// /////////////////////////////////////////////////////////////////////////////////////////
// insertion to record for push 
// function putf()
if(isset($_POST['feedback']))
    {
        // @$id=$_POST['$cnt'];
        @$name=$_POST['chkname'];
        @$email=$_POST['chkemail'];
        @$message=$_POST['message'];
        
        $query = "INSERT INTO feedbackform (namef,emailf,messagef)
        VALUES ( '$name','$email','$message')";
            if(mysqli_query($conn,$query))
            {
            //  echo'<script type="text/javascript">alert("insertion success")</script>';
            // }
            // else{
            //     echo'<script type="text/javascript">alert("insertion failed")</script>';
            }
    }

////////////////////////////////////////////////////////////////////////////////
// update onchange textbox for infix to postfix
function updaterow_intopo()
{
    @$output=$_POST['post'];
    $query = "UPDATE record SET inputr=$output  WHERE idr=(SELECT max(idr))";
            if(mysqli_query($conn,$query)){}
}

?>