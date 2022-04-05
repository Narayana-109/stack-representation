<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>stack trial</title>
    </head>
<body>

    <!-- <form action="index.php" method="post">
        <label><b>Insert</b></label>
        <input type="text" required placeholder="enter serial no" name="serial_no">
        <br>
        
        <label><b>Element</b></label>
        <input type="text" required placeholder="enter the element" name="element">
        <br>

        <button id="ibtn" name="insert" type="submit">PUSH</button>
     
        <button id="dbtn" name="delete" type="submit">POP</button>

        <button id="vbtn" name="disp" type="submit">DISPLAY</button>
</form> -->

<?php
$cnt=0;
    if(isset($_POST['insert']))
    $cnt+=1;
    {
        @$serial_no=$_POST['$cnt'];
        @$element=$_POST['element'];
        
        $query = "INSERT INTO webtable (serial_no,element)
        VALUES ('$serial_no', '$element')";
            //$query_run=mysqli_query($conn,$query);
            if(mysqli_query($conn,$query))
            {
                echo'<script type="text/javascript">alert("insertion successful")</script>';
            }
            else{
                echo'<script type="text/javascript">alert("insertion failed")</script>';
            }
          }

          if(isset($_POST['delete']))
          {
             // @$serial_no=$_POST['serial_no'];
              //@$element=$_POST['element'];
              
              $query = "DELETE FROM webtable WHERE serial_no=(select max(serial_no) from webtable limit 1)";
                  //$query_run=mysqli_query($conn,$query);
                  if(mysqli_query($conn,$query))
                  {
                      echo'<script type="text/javascript">alert("deletion successful")</script>';
                  }
                  else{
                      echo'<script type="text/javascript">alert("deletion failed")</script>';
                  }
                }


            //     if(isset($_POST['disp']))
            //     {
            //        // @$serial_no=$_POST['serial_no'];
            //         //@$element=$_POST['element'];
                    
            //         $query = "SELECT * FROM webtable";
            //         $r = mysqli_query($conn, $query);

            //     //there was no real need to check the connection, you should be doing this in your connection script.
            //     //you where using 'mysqli' above and 'mysql' below. 
            //     $row = mysqli_fetch_array($r);

            //     if ($r) {
            //     echo "<table><tr><th>serial_no</th><th>element</th></tr>";
            //     while ($row = mysqli_fetch_array($r)){
            //     echo "<tr><td>" . $row["serial_no"] . "</td><td>" . $row["element"] . "</td></tr>";
            //     }
            //     echo "</table>"; 
            //     } else {
            //     echo "0 results"; 
            //     }
            //   }
                      
        
?>
</body>
</html>