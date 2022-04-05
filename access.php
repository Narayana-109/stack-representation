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
// display all records


        
 if(isset($_POST['disp']))
    {
                   // @$serial_no=$_POST['serial_no'];
                    //@$element=$_POST['element'];
                    
    $query = "SELECT * FROM record limit 1,5";
    $r = mysqli_query($conn, $query);

                //there was no real need to check the connection, you should be doing this in your connection script.
                //you where using 'mysqli' above and 'mysql' below. 
    $row = mysqli_fetch_array($r);

    if ($r) {
        echo "<table><tr><th>NAME</th><th>EMAIL</th><th>OPERATION</th><th>INPUT</th><th>OUTPUT</th></tr>";
        while ($row = mysqli_fetch_array($r)){
            echo "<tr><td>" . $row["namer"] . "</td><td>" . $row["emailr"] . "</td><td>" . $row["operationr"] . "</td><td>" . $row["inputr"] . "</td><td>" . $row["outputr"] . "</td></tr>";
            }
        echo "</table>"; 
        } else {
        echo "0 results"; 
        }
    }
    

    // <form method="POST">
    //     <label>Name of Product:</label>
    //     <input type="text" name="Product_name" required><br>
    //     <label>Select a Category</label>
    //     <select name="Category">
    //         <?php 
                $allnames = mysqli_query($con, "SELECT DISTINCT namer FROM record");
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($namelist = mysqli_fetch_array(
                        $allnames,MYSQLI_ASSOC)):; 
            ?>
                <!-- <option value="<?php echo $category["Category_ID"];
                    // The value we usually set is the primary key -->
                ?>">
                    <?php echo $namelist["namer"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>