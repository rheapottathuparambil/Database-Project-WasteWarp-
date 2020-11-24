<!--
    Pranav Bhandari
    Rhea Pottathuparambil
    Ruta Vagasia
    Imtiaz Khalid
    Nihar Gupte
-->
 
<html>
    <body>
        <div align="center">
        <?php 
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "wastewarp";
            //create connection
            $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
            //check connection
            if(!$conn) {
                die("Connection Failed!");
            }
            else {
                $username = isset($_POST['un']) ? $_POST['un'] : '';
                $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
                $lname = isset($_POST['lname']) ? $_POST['lname'] : '';

                $query =   "DELETE FROM STUDENT
                             WHERE Username = '$username'" ;
                
                $query1 =   "DELETE FROM COLLECTOR
                             WHERE Username = '$username'";
                
                $query2 =   "DELETE FROM WUSER
                             WHERE Username = '$username' AND FName = '$fname' AND LName = '$lname' " ;
                
                if($conn->query($query)) 
                {
                   if($conn->query($query1))
                   {
                        $conn->query($query2);    
                    
                        echo "Record deleted successfully.";
                   }
                   else {
                        echo "Deleted in Student only.";
                   }
                }
                else {
                    echo "Error:" . $query . " " ;
                }
            }
            $conn = null;
        ?>
        </div>
    </body>
</html>
